var gulp = require('gulp'),
    runSequence = require('run-sequence');

gulp.task('default', function(cb) {
    runSequence([
        'scss-lint',
        'sass:dev',
        'js:dev',
        'watch'
    ]);
});

