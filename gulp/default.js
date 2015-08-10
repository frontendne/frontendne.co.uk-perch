var gulp = require('gulp'),
    runSequence = require('run-sequence');

gulp.task('default', function(cb) {
    runSequence([
        'sass:dev',
        'js:dev',
        'watch'
    ]);
});

