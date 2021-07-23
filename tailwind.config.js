const plugin = require('tailwindcss/plugin')

module.exports = {
  mode: 'jit',
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
    './resources/sass/**/*.scss',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        'heading': ['bebas-neue', 'sans-serif'],
        'body': ['soleil', 'sans-serif'],
      },

      fontSize: {
        'large': '3.4375rem',
        'medium': '2.125rem',
        'small': '1.3125rem',
      },
      colors: {
        'neon-pink': {
          light: '#E93BC0',
          DEFAULT: '#E93BC0',
          dark: '#E93BC0',
        },
        'neon-laguna': {
          dark: '#5FD3E3',
          DEFAULT: '#5FD3E3',
          light: '#5FD3E3',
        }
      }
    }
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'h1, h2, h3, h4': {fontFamily: theme('fontFamily.heading'), lineHeight: theme('lineHeight.none')},
        'h1': { fontSize: theme('fontSize.large') },
        'h2': { fontSize: theme('fontSize.medium') },
        'h3': { fontSize: theme('fontSize.small') },
        'body': {fontFamily: theme('fontFamily.body'), fontSize: theme('fontSize.small')},
        'html': {backgroundColor: theme('backgroundColor.black')},
      })
    })
  ],
  variants: {}
}
