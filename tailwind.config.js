/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
export default {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    theme: {
        extend: {
            fontFamily: {
                spacemono: ['"Space Mono"', ...defaultTheme.fontFamily.mono],
                rubik: ['"Rubik"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'lav-blue': {
                    50: 'rgba(56, 209, 241, 0.2)',
                    500: '#38d1f1',
                    600: '#05afd5',
                },
                'lav-green': {
                    50: 'rgba(4, 191, 12, 0.2)',
                    500: '#04bf0c',
                    600: '#078e0e',
                },
                'lav-orange': {
                    50: 'rgba(255, 165, 67, 0.2)',
                    500: '#ffa543',
                    600: '#ff8a20',
                },
                'lav-red': {
                    50: 'rgba(236, 67, 67, 0.2)',
                    500: '#ec4343',
                    600: '#d92929',
                },
            },
        },
    },
    plugins: [],
};
