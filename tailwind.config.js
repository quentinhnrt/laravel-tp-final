/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ['"Roboto"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                theme: {
                    50: "var(--theme-50)",
                    100: "var(--theme-100)",
                    200: "var(--theme-200)",
                    300: "var(--theme-300)",
                    400: "var(--theme-400)",
                    500: "var(--theme-500)",
                    600: "var(--theme-600)",
                    700: "var(--theme-700)",
                    800: "var(--theme-800)",
                    900: "var(--theme-900)",
                    950: "var(--theme-950)",
                },

                background: {
                    50: "var(--background-50)",
                    100: "var(--background-100)",
                    200: "var(--background-200)",
                    300: "var(--background-300)",
                    400: "var(--background-400)",
                    500: "var(--background-500)",
                    600: "var(--background-600)",
                    700: "var(--background-700)",
                    800: "var(--background-800)",
                    900: "var(--background-900)",
                },
            },
        },
    },
    plugins: [],
};
