'use strict';
var gulp = require('gulp'),
    autoprefixer = require('autoprefixer'),
    mqpacker = require('css-mqpacker'),
    csswring = require('csswring'),
    postcss = require('gulp-postcss'),
    sass = require('gulp-sass');
  
gulp.task('compile-sass:dev', function () {
    gulp.src('./assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});

gulp.task('compile-sass:build', function () {
    gulp.src('./assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            autoprefixer()]))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});
