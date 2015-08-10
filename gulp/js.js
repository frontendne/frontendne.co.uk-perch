'use strict';
var gulp = require('gulp'),
    browserify = require('gulp-browserify'),
    runSequence = require('run-sequence');
  
gulp.task('js:dev', function () {
    runSequence([
        'jshint',
        'browserify:dev'
    ]);
});

gulp.task('js:build', function () {
    runSequence([
        'jshint',
        'browserify:build'
    ]);
});

gulp.task('js:watch', function () {
    gulp.watch('./assets/js/**/*.{js,json}', ['js:dev']);
});
