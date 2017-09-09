var gulp = require('gulp'),
    runSequence = require('run-sequence');

gulp.task('default', function(cb) {
    runSequence('dev');
});

gulp.task('dev', function(cb) {
    runSequence([
        'sass:dev',
        'js:dev',
        'watch-no-sync'
    ]);
});

gulp.task('build', function(cb) {
    runSequence(
        'clean-all',
        'sass:build',
        'js:build');
});

