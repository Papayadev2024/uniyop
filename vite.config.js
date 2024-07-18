import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from 'glob';
import fs from 'fs';
import path from 'path';

const components = fs.readdirSync(path.resolve(__dirname, 'resources/js')).filter(file => file.endsWith('.jsx') || file == 'app.js');


export default defineConfig({
    server: {
        watch: {
            ignored: ['!**/node_modules/your-package-name/**'],
        }
    },
    plugins: [
        laravel({
            input: [
                ...glob.sync('resources/js/*.jsx'),
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            // Genera un chunk separado para cada componente
            input: components.map(component => `resources/js/${component}`),
        },
    },
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
        return pages[`./Pages/${name}.jsx`]
    }
});
