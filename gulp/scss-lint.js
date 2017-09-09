'use strict';
var gulp = require('gulp'),
    sassLint = require('gulp-sass-lint');

gulp.task('scss-lint', function () {
    gulp.src([
            './assets/scss/**/*.scss',
            '!./assets/scss/screen.scss',
            '!./assets/scss/base/_shame.scss',
            '!./assets/scss/base/_reset.scss',
        ]).pipe(sassLint({
            'config': '.scss-lint.yml'
        }))
        .pipe(sassLint.format());
});
