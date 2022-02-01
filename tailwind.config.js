const plugin = require('tailwindcss/plugin')

module.exports = {
  mode: 'jit',
  content: [
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
        'bolder': ['strawfordmedium', 'sans-serif'],
        'button': ['hero-new', 'sans-serif'],
      },

      fontSize: {
        large: '3.4375rem',
        normal: '2.625rem',
        'medium-x': '2.125rem',
        small: '1.5rem',
        tiny: '1.25rem',
        'small-screen': '0.75rem',
      },
      colors: {
        'neon-pink': {
          light: '#EB50CC',
          DEFAULT: '#EB50CC',
          dark: '#EB50CC',
        },
        'neon-blue': {
          light: '#4499EB',
          DEFAULT: '#4499EB',
          dark: '#4499EB',
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
      'xs': '475px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      'landscape': {'raw': '(orientation: landscape)'},
    },

    borderWidth: {
      DEFAULT: '1px',
      '0': '0',
      '2': '2px',
      '3': '3px',
      '4': '4px',
    },

    boxShadow: {
      sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
      md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
      lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
      xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
      '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',

     '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      none: 'none',
      button: '0 10px 15px -3px rgba(68, 153, 235, 0.1), 0 4px 6px -2px rgba(68, 153, 235, 0.05)',
    }
  },
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'h1, h2, h3, h4': {fontFamily: theme('fontFamily.heading'), fontWeight: theme('fontWeight.bold')},
        'h1, h2, h3':   { fontSize: theme('fontSize.normal') },
        'h4':   { fontSize: theme('fontSize.sm') },
        'body': { fontFamily: theme('fontFamily.body') },
        'html': { backgroundColor: theme('backgroundColor.black') },
      })
    })
  ],
  variants: {}
}