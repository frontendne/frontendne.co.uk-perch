'use strict';
var gulp = require('gulp'),
    scsslint = require('gulp-scss-lint');
  
gulp.task('scss-lint', function () {
    gulp.src([
            './assets/scss/**/*.scss',
            '!./assets/scss/base/_shame.scss',
            '!./assets/scss/base/_reset.scss',
        ]).pipe(scsslint({
            'config': '.scss-lint.yml'
        }));
});
