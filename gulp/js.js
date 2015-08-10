'use strict';
var gulp = require('gulp'),
    browserify = require('gulp-browserify');
  
gulp.task('js:dev', function () {
    gulp.src('./assets/js/*.js')
        .pipe(browserify({
            insertGlobals: true,
            debug: true
        }))
        .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/scripts'));
});

gulp.task('js:watch', function () {
    gulp.watch('./assets/js/**/*.{js,json}', ['js:dev']);
});
