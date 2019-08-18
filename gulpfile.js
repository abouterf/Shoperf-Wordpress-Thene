const gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var paths = {
    // styles: {
    //     src: 'assets/styles/**/*.less',
    //     dest: 'assets/styles/'
    // },
    scripts: 'assets/js/*.js',
    images : 'assets/img/**/*'
        // dest: 'assets/scripts/'

};
gulp.task('scripts',['build'],function () {
    return gulp.src(paths.scripts)
    // .pipe(coffee())
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        // .pipe(sourcemaps.write())
        .pipe(gulp.dest('build/js'));
})


gulp.task('default',['scripts']);