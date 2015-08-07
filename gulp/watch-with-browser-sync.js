var gulp = require('gulp'),
    browserSync = require('browser-sync').create();

//gulp.task('watch-with-browser-sync', ['watch'], function() {
gulp.task('watch-with-browser-sync', function() {
    browserSync.init({
        proxy: 'http://frontendne.local'
    });

    gulp.watch([
        './web/cms/templates/**/*.php' 
    ]).on('change', browserSync.reload);
});
