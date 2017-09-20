var gulp = require('gulp');
var clean = require('gulp-clean');

gulp.task('clean-all', function () {
    return gulp.src(['./web/cms/addons/feathers/frontendne/fonts', './web/cms/addons/feathers/frontendne/css/', './web/cms/addons/feathers/frontendne/scripts/'], {read: false})
      .pipe(clean());
  });