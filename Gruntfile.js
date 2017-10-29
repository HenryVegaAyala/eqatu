const mozjpeg = require('imagemin-pngquant')
module.exports = function (grunt) {
    grunt.initConfig({
        uglify: {
            options: {
                compress: true,
                separator: ';'
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

        grunt.registerTask('build', ['uglify','less'])
}
