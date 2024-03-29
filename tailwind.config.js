const { upperCase } = require('lodash')
const plugin = require('tailwindcss/plugin')

module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/sass/**/*.scss',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            fontSize: {
                large: '3.4375rem',
                normal: '2.25rem',
                'medium-x': '2.125rem',
                medium: '1.5rem',
                small: '1.25rem',
                tiny: '1.00rem',
                micro: '0.75rem',
                'small-screen': '0.5rem',
            },
            colors: {
                'neon-pink': {
                    light: '#EB50CC',
                    DEFAULT: '#EB50CC',
                    dark: '#EB50CC',
                },
                'neon-blue': {
                    light: '#48A2F7',
                    DEFAULT: '#4499EB',
                    dark: '#3D89D1',
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
                'dirty-white': {
                    dark: '#F7F8FC',
                    DEFAULT: '#F7F8FC',
                },
                'black': {
                    DEFAULT: '#010409',
                    light: 'rgba(17,17,17,0.5)'
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
                        opacity: .75,
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
            },
            maxWidth: {
                'xxs': '16rem',
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
            'landscape': {
                'raw': '(orientation: landscape)'
            },
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
        plugin(function ({
            addBase,
            theme
        }) {
            addBase({
                'h1, h2, h3, h4': {
                    fontWeight: 900,
                },
                'h1': {
                    fontSize: theme('fontSize.4xl'),
                },
                'h2': {
                    fontSize: theme('fontSize.2xl'),
                },
                'h3': {
                    fontSize: theme('fontSize.xl'),
                    fontWeight: 500,
                },
                'h4': {
                    fontSize: theme('fontSize.sm')
                },
                'body': {
                    fontWeight: 400,
                },
                'button, .button': {
                    fontWeight: 900,
                },
            })
        })
    ],
}
