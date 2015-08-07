'use strict';
var gulp = require('gulp'),
    sass = require('gulp-sass');
  
gulp.task('sass:dev', function () {
    gulp.src('./assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./assets/scss/**/*.scss', ['sass:dev']);
});
