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
        'heading': ['bebasneue', 'sans-serif'],
        'body': ['strawfordregular', 'sans-serif'],
        'button': ['strawfordbold', 'sans-serif'],
      },

      fontSize: {
        large: '3.4375rem',
        medium: '2.125rem',
        small: '1.5rem',
        tiny: '1.25rem',
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
      },
      borderRadius: {
        'xs': '0.09rem'
      },
      keyframes: {
        'swipe-y': {
          '0%': {
            opacity: 0,
            transform: 'translate(0, 100%)'
          },
          '20%': {
            opacity: 1,
            transform: 'translate(0, 0%)'
          },
          '70%': {
            opacity: 1,
            transform: 'translate(0, 0%)'
          },
          '90%': {
            opacity: 0,
            transform: 'translate(0, -100%)'
          },
          '100%': {
            opacity: 0,
            transform: 'translate(0, 100%)'
          },
        },

        'swipe-x-out': {
          '0%': {
            opacity: 1,
            transform: 'translate(0%, 0%)'
          },
          '100%': {
            opacity: 0,
            transform: 'translate(-100%, 0%)'
          },
        },

        'swipe-x-in': {
          '0%': {
            opacity: 0,
            transform: 'translate(100%, 0%)'
          },
          '100%': {
            opacity: 1,
            transform: 'translate(0%, 0%)'
          },
        }
      },
      animation: {
          'swipe-y': 'swipe-y 5s cubic-bezier(0, 0.55, 0.45, 1) 1s infinite',
          'swipe-x-out': 'swipe-x-out 5s cubic-bezier(0.16, 1, 0.3, 1) 0s infinite',
          'swipe-x-in': 'swipe-x-in 5s cubic-bezier(0.16, 1, 0.3, 1) 0s infinite',
      }
    }
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'h1, h2, h3, h4': {fontFamily: theme('fontFamily.heading')},
        'h1':   { fontSize: theme('fontSize.large') },
        'h2':   { fontSize: theme('fontSize.medium') },
        'h3':   { fontSize: theme('fontSize.small') },
        'body': { fontFamily: theme('fontFamily.body') },
        'html': { backgroundColor: theme('backgroundColor.black') },
      })
    })
  ],
  variants: {}
}
