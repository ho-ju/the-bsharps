module.exports = function(grunt) {
    grunt.initConfig({

        // Read in the package details
        pkg: grunt.file.readJSON('package.json'),

        // JS linting
        jshint: {
            grunt:      ["Gruntfile.js"],
            app:        ["web/static/dev/js/*.js"]
        },

        // Uglify Javascript files
        uglify: {
            options: {
                sourceMapPrefix: true,
                sourceMapRoot: '../..',
                sourceMappingURL: function(a) {
                    return a.replace(/^web/, '').replace(/\.min\.js/, '.map.js');
                },
                report:'min'
            },
            production: {
                options: { sourceMap: 'web/static/dist/js/optimized.map.js' },
                files: {
                    'web/static/dist/js/combined.min.js': [
                        'web/static/dev/js/libs/modernizr-2.6.2.min.js',
                        'web/static/dev/js/libs/jquery-2.1.4.min.js',
                        'web/static/dev/js/libs/angular.js',
                        'web/static/dev/js/libs/angular-touch.min.js',
                        'web/static/dev/js/libs/angular-strap.min.js',
                        'web/static/dev/js/libs/angular-strap.tpl.min.js',
                        'web/static/dev/js/libs/ui-bootstrap-tpls-0.14.3.js',
                        'web/static/dev/js/libs/Chart.js',
                        'web/static/dev/js/libs/angular-lazy-img.min.js'
                    ]
                }
            }
        },

        //  Less compilation
        less: {
            production: {
                options: {
                    paths: ["web/static/dev/less"],
                    compress: true,
                    sourceMap: true,
                    sourceMapFilename: 'web/static/dist/css/core.css.map',
                    sourceMapURL: '/static/dist/css/core.css.map',
                    outputSourceFiles: true
                },
                files: {
                    "web/static/dist/css/core.css": "web/static/dev/less/core.less"
                }
            }
        },

        // Automatically add css vendor prefixes
        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },
            production: {
                options: {
                    map: true
                },
                src: 'web/static/dist/css/core.css',
                dest: 'web/static/dist/css/core.css'
            },
        },

        // Generates icon fonts from a directory of SVG files.
        // webfont: {
        //     production: {
        //         src: 'web/static/img/icons/*',
        //         dest: 'web/static/fonts/',
        //         destCss: 'web/static/dev/less/',
        //         options: {
        //             stylesheet: 'less',
        //             relativeFontPath: '../../fonts/',
        //             types: 'eot,woff,ttf,svg'
        //         }
        //     }
        // },

        // Watch and rebuild files
        watch: {
            svg: {
                files: ['web/static/img/icons/*.svg'],
                tasks: ['webfont']
            },
            less: {
                files: ['web/static/dev/less/**/*.less'],
                tasks: ['less', 'autoprefixer']
            },
            javascript: {
                files: ['web/static/dev/js/**/*.js', 'Gruntfile.js'],
                tasks: ['jshint', 'uglify']
            }
        },

        // Simple server for local testing localhost:8000 by running `grunt connect watch`
        connect: {
            server: {
                options: {
                    base: 'web'
                }
            }
        }

    });

    // Third party modules
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // grunt.loadNpmTasks('grunt-webfont');

    // Register default task
    grunt.registerTask('default', ['jshint','less', 'autoprefixer', 'uglify']);

};