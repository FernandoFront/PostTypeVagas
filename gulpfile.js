
var gulp = require ('gulp');
var sass = require ('gulp-sass');
var autoprefixer = require ('gulp-autoprefixer');

function compilaSass(){
    return gulp
    .src('css/scss/*.scss')
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(gulp.dest('css/'))
}

gulp.task('sass', compilaSass);

function watch() {
    gulp.watch('css/scss/*.scss' , compilaSass)
}

gulp.task('default', watch);