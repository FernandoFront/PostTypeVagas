
var gulp = require ('gulp');
var sass = require ('gulp-sass');
var autoprefixer = require ('gulp-autoprefixer');

function compilaSass(){
    return gulp
    .src('css/scss/*.scss')
    .pipe(sass())
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(gulp.dest('.././style.css'))
}

gulp.task('sass', compilaSass);

function watch() {
    gulp.watch('css/scss/*.scss' , compilaSass)
}

gulp.task('default', watch);