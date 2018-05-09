'use strict';

import gulp from 'gulp';
import sass from 'gulp-sass';
import neat from 'node-neat';
import bourbon from 'node-bourbon';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'gulp-autoprefixer';


const dirs = {
    src: 'src',
    dest: './assets/dist',
    sass: './assets/sass'
};

gulp.task('styles', () => {
  return gulp.src('./assets/sass/style.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({
          includePaths: [].concat( bourbon, neat),
          errorLogToConsole: true,
          outputStyle: 'expanded'
      }))
      .pipe(autoprefixer())
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest('.'));
});

gulp.task('watch', () => {
    gulp.watch('assets/sass/**/*.scss', ['styles']);
});

