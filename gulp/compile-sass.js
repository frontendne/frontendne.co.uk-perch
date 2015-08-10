'use strict';
var gulp = require('gulp'),
    sass = require('gulp-sass');
  
gulp.task('compile-sass:dev', function () {
    gulp.src('./assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});
