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
var svgSprite = require('gulp-svg-sprite');

// The basic configuration
var config = {
    bowerDir: './bower_components',
    svgSprites: {
        shape: {
            shape: {
                dimension: {
                    maxWidth: 24,
                    maxHeight: 24
                }
            },
            transform: [
                {
                    svgo: {
                        plugins: [
                            {removeAttrs: {attrs: '(stroke|fill)'}}
                        ]
                    }
                }
            ]
        },
        mode: {
            symbol: {
                dest: 'img',
                sprite: 'icons.svg',
                prefix: '.icon-%s',
                bust: false
            }
        }
    }
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

    return gulp.src('./src/source/styles/template.scss')
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
            config.bowerDir + '/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js',
            config.bowerDir + '/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js',
            config.bowerDir + '/jquery-countTo/jquery.countTo.js',
            config.bowerDir + '/blockadblock/blockadblock.js',
            './src/source/scripts/template.js'
        ])
        .pipe(uglify())
        .pipe(concat('template.min.js'))
        .pipe(gulp.dest('./src/js/'));
});

/**
 * Create the svg icon sprite
 */
gulp.task('svg', function () {
    gulp.src('./src/source/icons/svg/**/*.svg')
        .pipe(svgSprite(config.svgSprites))
        .pipe(gulp.dest('./src'));
});

/**
 * Default Watcher
 */
gulp.task('default', ['css', 'js'], function () {
    gulp.watch(['./src/source/styles/**/*.scss'], ['css']);
    gulp.watch(['./src/source/scripts/**/*.js'], ['js']);
});