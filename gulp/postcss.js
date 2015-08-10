'use strict';
var gulp = require('gulp'),
    autoprefixer = require('autoprefixer'),
    postcss = require('gulp-postcss');
  
gulp.task('postcss:dev', function () {
    var processors = [
        autoprefixer()
    ];
    gulp.src('./web/cms/addons/feathers/frontendne/css/*.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/css'));
});
