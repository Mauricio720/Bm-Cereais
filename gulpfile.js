const {src,dest,series, parallel,watch}=require('gulp');
const rename=require('gulp-rename');
const uglify=require('gulp-uglify-es').default;
const uglifycss=require('gulp-uglifycss');
const concat=require('gulp-concat');

function javascript(){
    return src('src/js/*.js')
        .pipe(concat('script.js'))
        .pipe(rename({'extname':'.min.js'})) 
        .pipe(uglify())  
        .pipe(dest('public/js'));
}

function css(){
    return src('src/css/*.css')
        .pipe(concat('style.css'))
        .pipe(rename({'extname':'.min.css'}))
        .pipe(uglifycss(
            {
                'max-length':80,
                'uglyComments':true
            }
        )) 
        .pipe(dest('public/css'));
}


function watchFileCss(){
    return  watch('src/css/*.css', series(css));   
}

function watchFileJs(){
    return  watch('src/js/*.js', series(javascript));   
}


exports.default=parallel(javascript,css, watchFileCss,watchFileJs);