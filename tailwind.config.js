import defaultTheme from 'tailwindcss/defaultTheme';

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
            backgroundImage: {
                'posyandu-bg': "url('./public/image/lb-posyandu.png')",
            },
            colors: {
                'cl-olgreen' : '#FBFADA',
                'cl-matcha' : '#1A4D2E',
            },
        },
    },

    plugins: [require('daisyui')],
};
