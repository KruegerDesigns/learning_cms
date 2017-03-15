var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('sass', function(){
  return gulp.src([
    'css/sass/colors/yellow-purple.scss',
    'css/sass/style.scss'
    ])
    .pipe(autoprefixer())
    // .pipe(autoprefixer(autoprefixerOptions))
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest('css'))
});

gulp.task('watch', ['sass'], function (){
  gulp.watch('css/sass/*.scss', ['sass']); 
});

gulp.task('default', ['sass', 'watch' /*, possible other tasks... */]);
