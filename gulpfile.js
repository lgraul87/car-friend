const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat'); // Ejemplo para concatenar archivos JS

gulp.task('styles', function() {
  return gulp.src('src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(gulp.dest('dist/css'));
});

gulp.task('scripts', function() {
  return gulp.src('src/js/**/*.js')  // Ruta a tus archivos JS
    .pipe(concat('main.js'))  // Concatenar todos los archivos JS
    .pipe(gulp.dest('dist/js'));  // Carpeta de destino
});

gulp.task('build', gulp.series('styles', 'scripts')); // Ejecuta 'styles' y luego 'scripts'

gulp.task('default', gulp.series('build'));
