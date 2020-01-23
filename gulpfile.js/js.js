// --- Gulp ---

const { src, dest } = require('gulp');


// --- Plugins ---

const rollup = require('gulp-better-rollup');
const babel = require('rollup-plugin-babel');
const commonjs = require('@rollup/plugin-commonjs');
const resolve = require('@rollup/plugin-node-resolve');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

const environments = require('gulp-environments');
const development = environments.development;
const production = environments.production;

const browserSync  = require('browser-sync').create();


// --- Configuration ---

const config = require('../config/config');
const project = require('../config/project');


// --- Functions ---

function js() {
    return src(config.js.src)
        .pipe(development(sourcemaps.init()))
        .pipe(rollup({plugins: [babel(), commonjs(), resolve()]}, 'umd'))
        .pipe(production(uglify()))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(development(sourcemaps.write('./')))
        .pipe(dest(config.js.dist))
        .pipe(browserSync.stream());
};


// --- Exports ---

exports.js = js;