var gulp = require('gulp'),
    runSequence = require('run-sequence');

gulp.task('watch', function(cb) {
    runSequence([
        'sass:watch',
        'js:watch',
        'watch-with-browser-sync'
    ]);
});

gulp.task('watch-no-sync', function(cb) {
    runSequence([
        'sass:watch',
        'js:watch'
    ]);
});