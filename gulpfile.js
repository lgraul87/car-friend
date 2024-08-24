const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass')); // Usar 'sass' como el motor Sass

gulp.task('styles', function() {
  return gulp.src('src/scss/**/*.scss')  // Ruta a tus archivos SCSS
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));  // Carpeta de destino
});

gulp.task('default', gulp.series('styles'));
