var gulp = require('gulp'), // main
    sass = require('gulp-sass'), // scss compiler
    concat = require('gulp-concat'), // merge two files
    uglify = require('gulp-uglify'), // minify js files
    rename = require('gulp-rename'), // rename files
    cssmin = require('gulp-cssmin'), // minify css files
    merge = require('merge-stream'), // mearge two task
    gulpsequence = require('gulp-sequence'), //  execute multiple task
    babel = require("gulp-babel"), // convert next generation JavaScript, today.
    npmlodash = require("lodash"), // perfoming oops in gulp
    smushit = require('gulp-smushit'), // image optimizer
    autoprefixer = require('gulp-autoprefixer'), // css propertys autoprefixer
    cssbeautify = require('gulp-cssbeautify'), // css cssbeautify
    fileinclude = require('gulp-file-include'), // include html files
    browsersync = require("browser-sync"), // browser reload
    htmlmin = require('gulp-htmlmin'); // html minify

const layout = {
    'layouts': 'vertical', // vertical / horizontal
    'sublayouts': '',
    'bodyclass': '',
    'menuclass': 'menu-light menupos-fixed',
    'headerclass': 'headerpos-fixed',
}

//  [ scss compiler ] start
gulp.task('sass', function() {
    // main style css
    return gulp.src('src/assets/scss/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('dist/assets/css'))
})
//  [ scss compiler ] end

//  [ Copy assets ] start
gulp.task('build', function() {
    var required_libs = {
        js: [
            "node_modules/bootstrap/dist/js/bootstrap.min.js",
            "node_modules/chart.js/dist/Chart.min.js",
            "node_modules/pnotify/lib/umd/PNotify.js",
            "node_modules/pnotify/lib/umd/PNotifyButtons.js",
            "node_modules/pnotify/lib/umd/PNotifyCallbacks.js",
            "node_modules/pnotify/lib/umd/PNotifyDesktop.js",
            "node_modules/pnotify/lib/umd/PNotifyConfirm.js",
            "node_modules/jquery-bar-rating/dist/jquery.barrating.min.js",
            "node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js",
            "node_modules/sweetalert/dist/sweetalert.min.js",
            "node_modules/ekko-lightbox/dist/ekko-lightbox.min.js",
            "node_modules/lightbox2/dist/js/lightbox.min.js",
            "node_modules/bootstrap-notify/bootstrap-notify.min.js",
            "node_modules/prismjs/prism.js",
            "node_modules/bootstrap-slider/dist/bootstrap-slider.min.js",
            "node_modules/daterangepicker/moment.min.js",
            "node_modules/daterangepicker/daterangepicker.js",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js",
            "node_modules/bootstrap-maxlength/src/bootstrap-maxlength.js",
            "node_modules/jquery-validation/dist/jquery.validate.min.js",
            "node_modules/jquery-mask-plugin/dist/jquery.mask.min.js",
            "node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js",
            "node_modules/@claviska/jquery-minicolors/jquery.minicolors.min.js",
            "node_modules/select2/dist/js/select2.full.min.js",
            "node_modules/apexcharts/dist/apexcharts.min.js",
            "node_modules/highcharts/highcharts.js",
            "node_modules/highcharts/highcharts-3d.js",
            "node_modules/jquery-knob/dist/jquery.knob.min.js",
            "node_modules/peity/jquery.peity.min.js",
            "node_modules/datatables.net/js/jquery.dataTables.min.js",
            "node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js",
            "node_modules/datatables.net-select/js/dataTables.select.min.js",
            "node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js",
            "node_modules/datatables.net-buttons/js/dataTables.buttons.min.js",
            "node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js",
            "node_modules/datatables.net-buttons/js/buttons.colVis.min.js",
            "node_modules/datatables.net-buttons/js/buttons.print.min.js",
            "node_modules/datatables.net-buttons/js/buttons.html5.min.js",
            "node_modules/pdfmake/build/pdfmake.min.js",
			"node_modules/pdfmake/build/vfs_fonts.js",
            "node_modules/jszip/dist/jszip.min.js",
            "node_modules/datatables.net-colreorder/js/dataTables.colReorder.min.js",
            "node_modules/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js",
            "node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js",
            "node_modules/datatables.net-keytable/js/dataTables.keyTable.min.js",
            "node_modules/datatables.net-responsive/js/dataTables.responsive.min.js",
            "node_modules/gmaps/gmaps.min.js",
            "node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js",
            "node_modules/fullcalendar/dist/fullcalendar.min.js",
            "node_modules/moment/moment.js",
            "node_modules/components-jqueryui/jquery-ui.min.js",
            "node_modules/dropzone/dist/min/dropzone-amd-module.min.js",
            "node_modules/cropper/dist/cropper.min.js",
            "node_modules/clipboard/dist/clipboard.min.js",
            "node_modules/trumbowyg/dist/trumbowyg.min.js",
            "node_modules/flipclock/dist/flipclock.min.js",
            "node_modules/isotope-layout/dist/isotope.pkgd.min.js",
            "node_modules/dropify/dist/js/dropify.min.js",
            "node_modules/dragula/dist/dragula.min.js",

        ],
        css: [
            "node_modules/dragula/dist/dragula.min.css",
            "node_modules/dropify/dist/css/dropify.min.css",
            "node_modules/flipclock/dist/flipclock.css",
            "node_modules/trumbowyg/dist/ui/trumbowyg.min.css",
            "node_modules/trumbowyg/dist/ui/icons.svg",
            "node_modules/cropper/dist/cropper.min.css",
            "node_modules/dropzone/dist/min/dropzone.min.css",
            "node_modules/fullcalendar/dist/fullcalendar.min.css",
            "node_modules/bootstrap/dist/css/bootstrap.min.css",
            "node_modules/animate.css/animate.min.css",
            "node_modules/pnotify/dist/PNotifyBrightTheme.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-1to10.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-horizontal.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-movie.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-pill.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-reversed.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-square.css",
            "node_modules/jquery-bar-rating/dist/themes/bootstrap-stars.css",
            "node_modules/jquery-bar-rating/dist/themes/css-stars.css",
            "node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css",
            "node_modules/jquery-bar-rating/dist/themes/fontawesome-stars-o.css",
            "node_modules/perfect-scrollbar/css/perfect-scrollbar.css",
            "node_modules/ekko-lightbox/dist/ekko-lightbox.css",
            "node_modules/lightbox2/dist/css/lightbox.min.css",
            "node_modules/prismjs/themes/prism-coy.css",
            "node_modules/bootstrap-slider/dist/css/bootstrap-slider.min.css",
            "node_modules/daterangepicker/daterangepicker.css",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css",
            "node_modules/@claviska/jquery-minicolors/jquery.minicolors.css",
            "node_modules/@claviska/jquery-minicolors/jquery.minicolors.png",
            "node_modules/select2/dist/css/select2.min.css",
            "node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css",
            "node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css",
            "node_modules/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css",
            "node_modules/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css",
            "node_modules/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css",
            "node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css",
        ]
    };
    npmlodash(required_libs).forEach(function(assets, type) {
        if (type == "css") {
            gulp.src(assets)
                .pipe(gulp.dest("dist/assets/css/plugins"));
        } else {
            gulp.src(assets)
                .pipe(gulp.dest("dist/assets/js/plugins"));
        }
    });
    var cpyassets = gulp.src(['src/assets/**/*.*', '!src/assets/scss/**/*.*'])
        .pipe(gulp.dest('dist/assets'));
    return merge(cpyassets);
});

//  [ Copy assets ] end

//  [ build html ] start
gulp.task('build-html', function() {
    return gulp.src('src/html/*.html')
        .pipe(fileinclude({
            context: layout,
            prefix: '@@',
            basepath: '@file',
            indent: true
        }))
        .pipe(gulp.dest('dist'))
})
//  [ build html ] end

//  [ build js ] start
gulp.task('build-js', function() {
    var layoutjs = gulp.src('src/assets/js/*.js')
        .pipe(gulp.dest('dist/assets/js'))

    var pagesjs = gulp.src('src/assets/js/pages/*.js')
        .pipe(gulp.dest('dist/assets/js/pages'))

    return merge(layoutjs, pagesjs);
})
//  [ build js ] end

//  [ scss compiler ] start
gulp.task('mincss', function() {
    // main style css
    return gulp.src('src/assets/scss/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('dist/assets/css'))
        .pipe(cssmin())
        .pipe(gulp.dest('dist/assets/css'))
})
//  [ scss compiler ] end

//  [ uglify js ] start
gulp.task('uglify', function() {
    var layoutjs = gulp.src('src/assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/assets/js'))

    var pagesjs = gulp.src('src/assets/js/pages/*.js')
        .pipe(babel())
        .pipe(uglify())
        .pipe(gulp.dest('dist/assets/js/pages'))

    return merge(layoutjs, pagesjs);
})
//  [ uglify js ] end

//  [ minify html ] start
gulp.task('htmlmin', function() {
    return gulp.src('src/html/*.html')
        .pipe(fileinclude({
            context: layout,
            prefix: '@@',
            basepath: '@file',
            indent: true
        }))
        .pipe(htmlmin({
            collapseWhitespace: true
        }))
        .pipe(gulp.dest('dist'))
})
//  [ minify html ] end

//  [ image optimizer ] start
gulp.task('imgmin', function() {
    return gulp.src('src/assets/img/**/*.{jpg,png}')
        .pipe(smushit())
        .pipe(gulp.dest('dist/assets/img'));
});
//  [ image optimizer ] end

//  [ browser reload ] start
gulp.task("browserSync", function() {
    browsersync.init({
        server: "dist/"
    });
});
//  [ browser reload ] end

//  [ watch ] start
gulp.task('watch', function() {
    gulp.watch('src/assets/scss/**/*.scss', gulp.series('sass')).on('change', browsersync.reload);
    gulp.watch('src/assets/js/**/*.js', gulp.series('build-js')).on('change', browsersync.reload);
    gulp.watch('src/html/**/*.html', gulp.series('build-html')).on('change', browsersync.reload);
    gulp.watch('src/doc/**/*.html', gulp.series('build')).on('change', browsersync.reload);
})
//  [ watch ] start
const compile = gulp.parallel('browserSync', 'watch');
//  [ Default task ] start
gulp.task('default',

    gulp.series(
        'build',
        'sass',
        'build-js',
        'build-html',
        'imgmin',
        compile
    )
);
// gulp.parallel('browserSync','watch')
//  [ Default task ] end

//  [ watch minify ] start
gulp.task('watch-minify', function() {
    gulp.watch('src/assets/scss/**/*.scss', gulp.series('mincss'));
    gulp.watch('src/assets/js/**/*.js', gulp.series('uglify'));
    gulp.watch('src/html/**/*.html', gulp.series('htmlmin'));
    gulp.watch('src/doc/**/*.html', gulp.series('build'));
})
//  [ watch minify ] start
