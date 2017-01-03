var gulp           = require('gulp'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		concat         = require('gulp-concat'),
		uglify         = require('gulp-uglify'),
		cleanCSS       = require('gulp-clean-css'),
		rename         = require('gulp-rename'),
		del            = require('del'),
		imagemin       = require('gulp-imagemin'),
		pngquant       = require('imagemin-pngquant'),
		cache          = require('gulp-cache'),
		autoprefixer   = require('gulp-autoprefixer'),
		fileinclude    = require('gulp-file-include'),
		gulpRemoveHtml = require('gulp-remove-html'),
		bourbon        = require('node-bourbon'),
		ftp            = require('vinyl-ftp'),
		notify         = require("gulp-notify");

gulp.task('browser-sync', function() {
	browserSync({
		proxy: "modxstart",
		notify: false
	});
});

gulp.task('sass', ['headersass'], function() {
	return gulp.src('assets/app/sass/**/*.sass')
		.pipe(sass({
			includePaths: bourbon.includePaths
		}).on("error", notify.onError()))
		.pipe(rename({suffix: '.min', prefix : ''}))
		.pipe(autoprefixer(['last 15 versions']))
		.pipe(cleanCSS())
		.pipe(gulp.dest('assets/app/css'))
		.pipe(browserSync.reload({stream: true}))
});

gulp.task('headersass', function() {
	return gulp.src('assets/app/header.sass')
		.pipe(sass({
			includePaths: bourbon.includePaths
		}).on("error", notify.onError()))
		.pipe(rename({suffix: '.min', prefix : ''}))
		.pipe(autoprefixer(['last 15 versions']))
		.pipe(cleanCSS())
		.pipe(gulp.dest('assets/app'))
		.pipe(browserSync.reload({stream: true}))
});

gulp.task('libs', function() {
	return gulp.src([
		'assets/app/libs/jquery/dist/jquery-2.1.3.min.js',
		'assets/app/libs/magnific-popup/jquery.magnific-popup.min.js',
		'assets/app/libs/superfish/dist/js/superfish.min.js',
		'assets/app/libs/owl.carousel/dist/owl.carousel.min.js',
		'assets/app/libs/jQuery.mmenu/dist/js/jquery.mmenu.all.min.js',
		'assets/app/libs/imagesloaded/imagesloaded.pkgd.min.js',
		'assets/app/libs/masonry/masonry.pkgd.min.js'
		])
		.pipe(concat('libs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('assets/app/js'));
});

gulp.task('watch', ['sass', 'libs', 'browser-sync'], function() {
	gulp.watch('assets/app/header.sass', ['headersass']);
	gulp.watch('assets/app/sass/**/*.sass', ['sass']);
	gulp.watch('assets/app/*.html', browserSync.reload);
	gulp.watch('assets/app/js/**/*.js', browserSync.reload);
});

gulp.task('imagemin', function() {
	return gulp.src('assets/app/img/**/*')
		.pipe(cache(imagemin({
			interlaced: true,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		})))
		.pipe(gulp.dest('assets/dist/img')); 
});

gulp.task('buildhtml', function() {
  gulp.src(['assets/app/*.html'])
    .pipe(fileinclude({
      prefix: '@@'
    }))
    .pipe(gulpRemoveHtml())
    .pipe(gulp.dest('assets/dist/'));
});

gulp.task('removedist', function() { return del.sync('assets/dist'); });

gulp.task('build', ['removedist', 'buildhtml', 'imagemin', 'sass', 'libs'], function() {

	var buildCss = gulp.src([
		'assets/app/css/fonts.min.css',
		'assets/app/css/main.min.css'
		]).pipe(gulp.dest('assets/dist/css'));

	var buildFiles = gulp.src([
		'assets/app/.htaccess'
	]).pipe(gulp.dest('assets/dist'));

	var buildFonts = gulp.src('assets/app/fonts/**/*').pipe(gulp.dest('assets/dist/fonts'));

	var buildJs = gulp.src('assets/app/js/**/*').pipe(gulp.dest('assets/dist/js'));

});

gulp.task('deploy', function() {

	var conn = ftp.create({
		host:      'hostname.com',
		user:      'username',
		password:  'userpassword',
		parallel:  10,
		log: gutil.log
	});

	var globs = [
	'assets/dist/**',
	'assets/dist/.htaccess',
	];
	return gulp.src(globs, {buffer: false})
	.pipe(conn.dest('/path/to/folder/on/server'));

});

gulp.task('clearcache', function () { return cache.clearAll(); });

gulp.task('default', ['watch']);
