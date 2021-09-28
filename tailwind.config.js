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
        'heading': ['hero-new', 'sans-serif'],
        'body': ['strawfordregular', 'sans-serif'],
        'button': ['hero-new', 'sans-serif'],
      },

      fontSize: {
        large: '3.4375rem',
        medium: '2.625rem',
        'medium-x': '2.125rem',
        small: '1.5rem',
        tiny: '1.25rem',
      },
      colors: {
        'neon-pink': {
          light: '#EB50CC',
          DEFAULT: '#EB50CC',
          dark: '#EB50CC',
        },
        'neon-laguna': {
          dark: '#38EBE4',
          DEFAULT: '#38EBE4',
          light: '#38EBE4',
        },
        'neon-green': {
          dark: '#38EB7F',
          DEFAULT: '#38EB7F',
          light: '#38EB7F',
        },
        'neon-red': {
          dark: '#EB645B',
          DEFAULT: '#EB645B',
          light: '#EB645B',
        },
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
          'swipe-x-out': 'swipe-x-out 2.5s cubic-bezier(0.16, 1, 0.3, 1) 0s infinite',
          'swipe-x-in': 'swipe-x-in 2.5s cubic-bezier(0.16, 1, 0.3, 1) 0s infinite',
      }
    },
    screens: {
      'xxs': '320px',
      // => @media (min-width: 475px) { ... }

      'xs': '475px',
      // => @media (min-width: 475px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'h1, h2, h3, h4': {fontFamily: theme('fontFamily.heading'), fontWeight: theme('fontWeight.bold')},
        'h1, h2, h3':   { fontSize: theme('fontSize.medium') },
        'h4':   { fontSize: theme('fontSize.sm') },
        'body': { fontFamily: theme('fontFamily.body') },
        'html': { backgroundColor: theme('backgroundColor.black') },
      })
    })
  ],
  variants: {}
}