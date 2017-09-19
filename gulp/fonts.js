var gulp = require('gulp');

gulp.task('font:move', function(){
    gulp.src(['./assets/fonts/*'])
    .pipe(gulp.dest('./web/cms/addons/feathers/frontendne/fonts/'));
  });