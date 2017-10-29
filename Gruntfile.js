const mozjpeg = require('imagemin-pngquant')
module.exports = function (grunt) {
    grunt.initConfig({
        uglify: {
            options: {
                compress: true,
                separator: ';',
                mangle: false
            },
            dist: {
                src: ['web/js/*.js'],
                dest: 'web/js/eqatu.js'
            }
        },
        less: {
            options: {
                compress: true,
                style: 'expanded'
            },
            dist: {
                src: ['web/css/*.css'],
                dest: 'web/css/eqatu.css'
            }
        },
        concat_sourcemap: {
            options: {
                sourcesContent: true
            },
            all: {
                files: {
                    "web/js/all.js": grunt.file.readJSON("assets/js/all.json")
                }
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'web/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: 'web/css/',
                    ext: '.min.css'
                }]
            }
        },
        watch: {
            js: {
                files: ["assets/js/**/*.js", "assets/js/all.json"],
                tasks: ["concat_sourcemap", "uglify:lib"],
                options: {
                    livereload: true
                }
            },
        }
    }),

        grunt.loadNpmTasks('grunt-contrib-uglify'),
        grunt.loadNpmTasks('grunt-contrib-less'),
        grunt.loadNpmTasks('grunt-typescript'),
        grunt.loadNpmTasks('grunt-concat-sourcemap'),
        grunt.loadNpmTasks('grunt-contrib-watch'),
        grunt.loadNpmTasks('grunt-contrib-copy'),
        grunt.loadNpmTasks('grunt-contrib-sass'),
        grunt.loadNpmTasks('grunt-contrib-concat'),
        grunt.loadNpmTasks('grunt-contrib-imagemin'),
        grunt.loadNpmTasks('grunt-contrib-htmlmin'),
        grunt.loadNpmTasks('grunt-contrib-cssmin'),

        grunt.registerTask('build', ['uglify', 'less', "concat_sourcemap"]);
        grunt.registerTask("default", ["watch"]);
}
