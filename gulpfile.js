var gulp = require('gulp'),
    imagemin = require('gulp-imagemin'),
    svg = require('gulp-svg-sprite'),
	//iconfont = require('gulp-iconfont'),
	//iconfontCss = require('gulp-iconfont-css'),
	runTimestamp = Math.round(Date.now()/1000),
	sourcemaps = require('gulp-sourcemaps'),
	babel = require('gulp-babel'),
	concat = require('gulp-concat'),
	browserify = require('gulp-browserify');


gulp.task('images', function(){
	gulp.src('./assets/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('./images'));
});

gulp.task('svg', function(){
	var svgConfig = {
		shape: {
			dimension: {
				maxWidth: 24,
				maxHeight: 24
			},
			dest: '../icons/svg'
		},
		svg: {
			xmlDeclaration      : false,
			doctypeDeclaration  : false
		},
		mode: {
			symbol: {
				dest: '../icons/sprite',
				sprite: './sprite.symbol.svg'
			},
			css: {
				dest: '../assets',
				sprite: 'icons/sprite/sprite.symbol.svg',
				bust: false,
				render: {
					scss: {
						dest: 'scss/components/_svg-icons.scss'
					}
				}
			}
		}
	};
	return gulp.src('./assets/icons/*.svg')
		.pipe(svg(svgConfig))
		.pipe(gulp.dest('./icons'));
});

/*var iconFontName = 'iconfont';

gulp.task('iconfont', function(){
	return gulp.src(['./assets/icons/*.svg'], {base: 'app/assets'})
		.pipe(iconfontCss({
			fontName: iconFontName,
			path: 'scss',
			targetPath: '../../assets/scss/components/_font-icons.scss',
			fontPath: '../icons/font/'
		}))
		.pipe(iconfont({
			fontName: iconFontName,
			//prependUnicode: true,
			formats: ['ttf', 'eot', 'woff', 'woff2', 'svg'],
			timestamp: runTimestamp,
			normalize: true,
			//fontHeight: 1001
		}))
		.pipe(gulp.dest('./icons/font'));
});*/

gulp.task('js', function(){
	return gulp.src('./assets/js/app.js')
		.pipe(sourcemaps.init())
		.pipe(babel({
			presets: ['es2015'],
			plugins: ['transform-runtime']
		}))
		.pipe(browserify({
			insertGlobals: true
		}))
		.pipe(concat('app.js'))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./public'));
});

gulp.task('default', function(){
	gulp.run('images', 'js');
	gulp.watch('./assets/images/*', function(e){
		gulp.run('images');
	});
	gulp.watch('./assets/js/*', function(e){
		gulp.run('js');
	});
});