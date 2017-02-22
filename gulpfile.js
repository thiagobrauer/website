var css = ['resources/assets/vendor/bootstrap/dist/css/bootstrap.css',
            'resources/assets/vendor/sweetalert2/dist/sweetalert2.css',
            'resources/assets/vendor/font-awesome/css/font-awesome.css',
            'resources/assets/vendor/gridstack/dist/gridstack.css'
            ];
// 'resources/dataview-custom.css',
var js  = ['resources/assets/vendor/jquery/dist/jquery.js',
            'resources/assets/vendor/lodash/dist/lodash.js',
            'resources/assets/vendor/bootstrap/dist/js/bootstrap.js',   
            'resources/assets/vendor/sweetalert2/dist/sweetalert2.js',
            'resources/assets/vendor/gridstack/dist/gridstack.js'
            ];
var fonts_sources = ['resources/assets/vendor/bootstrap/fonts/**/*.*',
                    'resources/assets/vendor/font-awesome/fonts/**/*.*'
                    ];

var gulp = require('gulp');
var gulpCopy = require('gulp-copy');
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");
var cssmin = require("gulp-cssmin");
var stripCssComments = require('gulp-strip-css-comments');
 
gulp.task('minify-css', function(){
    gulp.src(css)
    .pipe(concat('style.min.css'))
    .pipe(stripCssComments({all: true}))
    .pipe(cssmin())
    .pipe(gulp.dest('public/css/'));
});
 
// Tarefa de minificação do Javascript
gulp.task('minify-js', function () {
    gulp.src(js)                        // Arquivos que serão carregados, veja variável 'js' no início
    .pipe(concat('script.min.js'))      // Arquivo único de saída
    .pipe(uglify())                     // Transforma para formato ilegível
    .pipe(gulp.dest('public/js/'));          // pasta de destino do arquivo(s)
    
});

gulp.task('copy-fonts', function () {
    gulp.src(fonts_sources)    
    .pipe(gulp.dest('public/fonts'));
});

gulp.task('default', function() {
	gulp.start('minify-css', 'minify-js', 'copy-fonts');
});
