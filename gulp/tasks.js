var gulp = require('gulp'),
    runSequence = require('run-sequence');

gulp.task('default', function(cb) {
    runSequence('dev');
});

gulp.task('dev', function(cb) {
    runSequence([
        'sass:dev',
        'js:dev',
        'watch'
    ]);
});

gulp.task('build', function(cb) {
    runSequence([
        'sass:build',
        'js:build',
    ]);
});

