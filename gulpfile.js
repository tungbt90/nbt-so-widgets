var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rtlcss = require('gulp-rtlcss');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var cssnano = require('gulp-cssnano');

var onError = function (err) {
    console.log('An error occurred:', gutil.colors.magenta(err.message));
    gutil.beep();
    this.emit('end');
};

gulp.task('sass', function() {
    return gulp.src('./assets/sass/*.scss')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./assets/'));
    // .pipe(cssnano({zindex:false}))
    // .pipe(rename({ suffix: '.min' }))
    // .pipe(gulp.dest('../'))
    // .pipe(rtlcss())
    // .pipe(rename({ basename: 'rtl' }))
    // .pipe(gulp.dest('../'))
    // .pipe(cssnano({zindex:false}))
    // .pipe(rename({ basename: 'rtl', suffix: '.min' }))
    // .pipe(gulp.dest('../'));
});

gulp.task('default', ['sass']);
