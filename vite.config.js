const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-meet-the-team',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-build-meet-the-team',
            input: [
                __dirname + '/resources/css/tool.css',
                __dirname + 'resources/js/tool.js'
            ],
            refresh: true,
        }),
    ],
});
