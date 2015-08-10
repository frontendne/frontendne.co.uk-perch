'use strict';
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    runSequence = require('run-sequence');
  
gulp.task('sass:dev', function () {
    runSequence([
        'scss-lint',
        'compile-sass:dev',
    ]);
});

gulp.task('sass:watch', function () {
    gulp.watch('./assets/scss/**/*.scss', ['sass:dev']);
});
