'use strict';
var gulp = require('gulp'),
    browserify = require('gulp-browserify'),
    uglify = require('gulp-uglify');

gulp.task('browserify:dev', function () {
    gulp.src('./assets/js/*.js')
        .pipe(browserify({
            insertGlobals: true,
            debug: true
        }))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/scripts'));
});

gulp.task('browserify:build', function () {
    gulp.src('./assets/js/*.js')
        .pipe(browserify({
            insertGlobals: false,
            debug: false
        }))
        .pipe(uglify())
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/scripts'));
});
