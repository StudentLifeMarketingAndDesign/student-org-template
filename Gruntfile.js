module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    concat: {
      dist: {
        src: [
          'bower_components/jquery/jquery.min.js',
          'bower_components/foundation/js/foundation.js', 
          './js/app.js',
        ],
        dest: './js/build/main.js'
      }
    },

    uglify: {
      build: {
        src: ['./js/build/main.js'],
        dest: './js/build/main.min.js'
      }
    },

    sass: {
      dist: {
        options: {
          style: 'development'
        },
        files: {
          './css/app.css': './scss/app.scss',
        }
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: './images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: './images/'
        }]
      }
    },

    watch: {
      scripts: {
        files: ['./js/*.js', './js/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false,
          livereload: true
        }
      },
      css: {
        files: ['./scss/*.scss', './scss/**/*.scss'],
        tasks: ['sass'],
        options: {
          spawn: false,
          livereload: true
        }
      }
    },

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-simple-watch');

  // Default task(s).
  grunt.registerTask('default', ['concat', 'uglify', 'sass' , 'simple-watch']);

};