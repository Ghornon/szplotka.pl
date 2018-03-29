// Define some plugins!
const gulp = require('gulp');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');

/* Compile Sass. */

gulp.task('sass', function() {
    return gulp.src('./css/*.scss') // Create a stream in the directory where our Sass files are located.
    .pipe(sourcemaps.init())                
    .pipe(sass.sync().on('error', sass.logError)) // Compile Sass into style.css.
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: true
    }))
    .pipe(cssnano())                // Minify and optimize style.css
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./css'));     // Write style.css to the project's root directory.
});

/* Watch the directory for changes. */

gulp.task('watch', function() {
  gulp.watch('./css/*.scss', ['sass']);  // If a file changes, re-run 'sass'
});