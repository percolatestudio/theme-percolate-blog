module.exports = function(grunt) {
  grunt.initConfig({
    less: {
      development: {
        options: {
          //compress: true,
          //yuicompress: true,
          //optimization: 2
        },
        files: {
          // target.css file: source.less file
          "style.css": "style.less"
        }
      }
    },
    watch: {
      styles: {
        // Which files to watch (all .less files recursively in the less directory)
        files: ['css/**/*.less', 'style.less'],
        tasks: ['less']
      },
      livereload: {
          options: { livereload: true },
          files: ['style.css', '*.php', '**/*.php', 'js/*.js', 'img/**/*.{png,jpg,jpeg,gif,webp,svg}']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);
};