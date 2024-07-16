import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                'custom-gray': '#F8F8F8',
                'custom-white': '#FFFFFF',
                'custom-border': 'rgba(21, 41, 76, 0.4)', // Defin
              },
              // Añadir el gradiente personalizado
              backgroundImage: {
                'custom-gradient': 'linear-gradient(to bottom, #F8F8F8 100%, #FFFFFF 100%)',
              },
              
              fontFamily: {
                Inter_Bold: ["Inter_Bold"],
                Inter_ExtraBold: ["Inter_ExtraBold"],
                Inter_Light: ["Inter_Light"],
                Inter_Medium: ["Inter_Medium"],
                Inter_Regular: ["Inter_Regular"],
                Inter_SemiBold: ["Inter_SemiBold"],
            },

           
        },
    },
    variants: {
        extend: {
            opacity: ['focus-within'],
        },
    },
    plugins: [
        forms,
        typography,
        // add custom variant for expanding sidebar
        plugin(({ addVariant, e }) => {
            addVariant('sidebar-expanded', ({ modifySelectors, separator }) => {
                modifySelectors(({ className }) => `.sidebar-expanded .${e(`sidebar-expanded${separator}${className}`)}`);
            });
        }),


    ],
};
