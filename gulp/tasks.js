var gulp = require('gulp'),
    runSequence = require('run-sequence');

gulp.task('default', function(cb) {
    runSequence('dev');
});

gulp.task('dev', function(cb) {
    runSequence([
        'font:move',
        'sass:dev',
        'js:dev',
        'watch-no-sync'
    ]);
});

gulp.task('build', function(cb) {
    runSequence(
        'font:move',
        'clean-all',
        'sass:build',
        'js:build');
});

