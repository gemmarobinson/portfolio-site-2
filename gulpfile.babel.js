'use strict';

import gulp from 'gulp';
import plumber from 'gulp-plumber';
import browserify from 'browserify';
import babelify from 'babelify';
import source from 'vinyl-source-stream';
import gutil from 'gulp-util';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import cssnano from 'gulp-cssnano';
import sourcemaps from 'gulp-sourcemaps';
import rename from 'gulp-rename';
import notify from 'gulp-notify';
import uglify from 'gulp-uglify';
import buffer from 'vinyl-buffer';

/*
**  Lets bring es6 to es5 with this.
**  Babel - converts ES6 code to ES5 - however it doesn't handle imports.
**  Browserify - crawls your code for dependencies and packages them up
**  into one file. can have plugins.
**  Babelify - a babel plugin for browserify, to make browserify
**  handle es6 including imports.
*/
gulp.task('Javascript', () => {
    browserify({ debug: true })
        .transform(babelify)
        .require('assets/src/js/app.js', { entry: true })
        .bundle()
        .pipe(plumber({ errorHandler: function(err) {
            notify.onError({
                title: 'Something\'s gone wrong',
                message:  'Error: JS could not compile'
            })(err);
            console.log(err.toString());
            this.emit('end');
         }}))
        .on('error',gutil.log)
        .pipe(source('bundle.js'))
        .pipe(buffer())
        .pipe(uglify())
        .pipe(gulp.dest('./assets/dist'));
});

gulp.task('Styles', () => {
    gulp.src('assets/src/scss/*.scss')
        .pipe(plumber({ errorHandler: function(err) {
            notify.onError({
                title: 'Something\'s gone wrong',
                message:  'Error: Sass could not compile'
            })(err);
            this.emit('end');
        }}))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./assets/dist/')) // unminified
        .pipe(cssnano({
            zindex: false
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(rename(function (path) {
            if(path.extname === '.css') {
                path.basename += '.min';
            }
        }))
        .pipe(gulp.dest('./assets/dist/'));
});


gulp.task('fonts', function() {
  return gulp.src('node_modules/@fortawesome/fontawesome-pro/webfonts/*')
    .pipe(gulp.dest('./assets/webfonts'))
})

// Watch for changes and reload browser
gulp.task('default', () => {
    gulp.watch('**/assets/src/scss/**/*.scss', ['Styles']);
    gulp.watch('**/assets/src/js/**/*.js', ['Javascript']);
});