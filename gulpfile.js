'use strict';
var gulp = require('gulp');
var filter = require('gulp-filter');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var gulp = require('gulp');
var sass = require('gulp-sass');

// The basic configuration
var config = {
    bowerDir: './bower_components',
};

/**
 * CSS (concat, compile, autoprefix, minify, sourcemaps)
 */
gulp.task('css', function () {
    // Sass config
    var sassConfig = {
        advanced: true,
        aggressiveMerging: true,
        mediaMerging: true,
        precision: 10,
        includePaths: [config.bowerDir]
    };

    return gulp.src('./src/scss/template.scss')
        .pipe(sass(sassConfig).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(minifyCss())
        .pipe(concat('template.min.css'))
        .pipe(gulp.dest('./src/css/'));
});

/**
 * JS (concat, minify, sourcemaps)
 */
gulp.task('js', function () {
    return gulp.src([
            config.bowerDir + '/bootstrap-sass/assets/javascripts/bootstrap/collapse.js',
            config.bowerDir + '/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js',
            config.bowerDir + '/bootstrap-sass/assets/javascripts/bootstrap/transition.js',
            config.bowerDir + '/waypoints/lib/jquery.waypoints.js',
            config.bowerDir + '/Counter-Up/jquery.counterup.js',
            './src/js/template.js'
        ])
        .pipe(uglify())
        .pipe(concat('template.min.js'))
        .pipe(gulp.dest('./src/js/'));
});

/**
 * Fonts (copy the fonts to the public dir)
 */
gulp.task('fonts', function () {
    return gulp.src(config.fontAwesomeDir + '/fonts/**.*')
        .pipe(gulp.dest('./src/fonts'));
});

/**
 * Default Watcher
 */
gulp.task('default', ['css', 'js'], function () {
    gulp.watch(['./src/scss/**/*.scss'], ['css']);
    gulp.watch(['./src/js/**/*.js'], ['js']);
});