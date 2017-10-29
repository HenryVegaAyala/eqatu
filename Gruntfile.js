module.exports = function (grunt) {
	grunt.initConfig({
		less: {
			options: {
				compress: true,
				style: "expanded"
			},
			dist: {
				src: ["web/css/site.css", "web/css/materialize.css", "web/css/font-awesome.css"],
				dest: "web/css/eqatu.css"
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
					cwd: "web/css/",
					src: ["eqatu.css", "eqatu.min.css"],
					dest: "web/css/",
					ext: ".min.css"
				}]
			}
		},
		svgmin: {
			options: {
				plugins: [
					{
						removeViewBox: false
					}, {
						removeUselessStrokeAndFill: false
					}
				]
			},
			dist: {
				files: {
					"web/img/preloader.svg": "web/img/preloader.svg"
				}
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

	grunt.loadNpmTasks("grunt-contrib-less"),
	grunt.loadNpmTasks("grunt-concat-sourcemap"),
	grunt.loadNpmTasks("grunt-contrib-watch"),
	grunt.loadNpmTasks("grunt-contrib-htmlmin"),
	grunt.loadNpmTasks("grunt-contrib-cssmin"),
	grunt.loadNpmTasks("grunt-svgmin"),

	grunt.registerTask("build", ["less", "concat_sourcemap", "cssmin", "svgmin"]);
	grunt.registerTask("default", ["watch"]);
};
