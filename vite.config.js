import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            assets: ['resources/images/**'],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                loadPaths: ['node_modules'],
                silenceDeprecations: ['import', 'mixed-decls', 'color-functions', 'global-builtin'],
            },
        },
    },
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
