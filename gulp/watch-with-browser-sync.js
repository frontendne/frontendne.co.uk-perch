var gulp = require('gulp'),
    browserSync = require('browser-sync').create();

gulp.task('watch-with-browser-sync', function() {
    browserSync.init({
        proxy: 'http://frontendne.local',
        browser: "google chrome"
    });

    gulp.watch([
        './web/cms/templates/**/*.php',
        './web/cms/addons/feathers/frontendne/css/*.css',
        './web/cms/addons/feathers/frontendne/scripts/*.js',
    ], { debounceDelay: 2000 }).on('change', browserSync.reload);
});
