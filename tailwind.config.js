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
                mont: ['Montserrat', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand-gray': '#232323',
                'brand-gray-secondary': '#2b2b2b',
                'brand-primary': '#02ffd7',
                'brand-secondary': '#ff0266',
            }
        },
    },

    plugins: [forms],
};
