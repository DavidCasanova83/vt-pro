import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            primary: {
              light: '#4FCCC0', 
              DEFAULT: '#3A9C92', //green VT #3A9C92
              dark: '#126D63',
            },
            secondary: {
              light: '#EA7A54',
              DEFAULT: '#EF5824', //orange VT
              dark: '#CF3A07',
            },
        },
    },

    plugins: [forms],
};
