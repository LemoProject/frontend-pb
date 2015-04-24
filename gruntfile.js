module.exports = function(grunt) {
    grunt.initConfig({
        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'css/style.css': 'sass/style.scss'
                }
            }
        },
        watch: {
            style: {
                files: ['sass/**/*.scss'],
                tasks: ['sass', 'autoprefixer', 'cssmin'],
                options: {
                    spawn: false,
                    atBegin: true
                }
            },
            scripts: {
                files: ['javascript/**/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                    atBegin: true
                }
            },
          sprites: {
                files: ['sprites/single/*.png'],
                tasks: ['sprite'],
                options: {
                    spawn: false,
                    atBegin: true
                }
            }
        },
        sprite:{
            all: {
                src: 'sprites/single/*.png',
                dest: 'sprites/spritesheet.png',
                imgPath: '../sprites/spritesheet.png',
                destCss: 'sass/_sprite.scss',
                cssFormat: 'scss'
            }
        },
        autoprefixer: {
            options: {
              map: true
            },
            style: {
                src: 'css/style.css'
            }
        },
        concat: {
            javascript: {
                src: [
                  'bower_components/jquery/dist/jquery.js',
                  'bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
                  'bower_components/d3/d3.js',
                  'javascript/plugins/*.js',
                  'javascript/custom/*.js'
                ],
                dest: 'javascript/script.js'
            }
        },
        uglify: {
            javascript: {
                files: {
                  'javascript/script.min.js': ['javascript/script.js']
                }
            }
        },
        cssmin: {
            style: {
                files: {
                    'css/style.min.css': ['css/style.css']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['watch']);
};
