import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const plugin = require('tailwindcss/plugin');
const flowbite = require('flowbite/plugin');


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './node_modules/preline/dist/*.js',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './node_modules/flowbite/**/*.js'
    ],
    darkMode: 'class',
    theme: {
        extend: {
            // Añadir el gradiente personalizado
            backgroundImage: {
                'custom-gradient': 'linear-gradient(to bottom, #F8F8F8 100%, #FFFFFF 100%)',
            },

            fontFamily: {
                Pangea_Bold: ["Pangea_Bold"],
                Pangea_Semibold: ["Pangea_Semibold"],
                Pangea_Regular: ["Pangea_Regular"],
                Pangea_Medium: ["Pangea_Medium"],
                Pangea_Light: ["Pangea_Light"],
               
            },

            screens: {
                xs: '320px',
                "2xs": "420px",
                sm: "640px",
                md: "768px",
                "2md": "850px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
            colors: {
                azuluniyop: '#3D8BF2',
                morauniyop: '#A9A0E5',
                blancouniyop: '#F8F8F8',
            },
            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
            },
              keyframes: {
                'infinite-scroll': {
                  from: { transform: 'translateX(0)' },
                  to: { transform: 'translateX(-100%)' },
                }
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
        flowbite,
        // add custom variant for expanding sidebar
        plugin(({ addVariant, e }) => {
            addVariant('sidebar-expanded', ({ modifySelectors, separator }) => {
                modifySelectors(({ className }) => `.sidebar-expanded .${e(`sidebar-expanded${separator}${className}`)}`);
            });
        }),
        
    ],
};
