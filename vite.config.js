import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/dashboard.js',
		'resources/js/section_average_chart.js'
            ],
            refresh: true,
        }),
    ],
});
