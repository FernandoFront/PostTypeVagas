import { src, dest, task } from 'gulp';
import sass from 'gulp-sass';

function compilaSass(){
    return src('css/scss/*.scss')
    .pipe(sass())
    .pipe(dest('css/'))
}

task('sass', compilaSass);