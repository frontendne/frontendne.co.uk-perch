'use strict';
var gulp = require('gulp'),
    autoprefixer = require('autoprefixer'),
    mqpacker = require('css-mqpacker'),
    csswring = require('csswring'),
    postcss = require('gulp-postcss');
  
gulp.task('postcss:dev', function () {
    var processors = [
        autoprefixer()
    ];
    gulp.src('./web/cms/addons/feathers/frontendne/css/*.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});

gulp.task('postcss:build', function () {
    var processors = [
        autoprefixer(),
        mqpacker,
        csswring
    ];
    gulp.src('./web/cms/addons/feathers/frontendne/css/*.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});
