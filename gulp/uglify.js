'use strict';
var gulp = require('gulp'),
    uglify = require('gulp-uglify');
  
gulp.task('uglify', function() {
    gulp.src('./web/cms/addons/feathers/frontendne/scripts/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/scripts'));
});
