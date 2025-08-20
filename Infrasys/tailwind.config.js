import defaultTheme from 'tailwindcss/defaultTheme';
// import forms from '@tailwindcss/forms'; // Comentado temporalmente

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',  // Añadido
        './resources/**/*.vue', // Añadido
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        // forms  // Comentado temporalmente
    ],
};