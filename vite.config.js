import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/scss/main.scss', 'resources/js/perfilScript.js', 'resources/js/homeScripts.js'],
            refresh: true,
        }),
    ],
});
