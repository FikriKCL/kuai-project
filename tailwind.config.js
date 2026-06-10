/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                kuai: {
                    50:  '#f0f7f0',
                    100: '#dceedd',
                    200: '#b9ddbb',
                    500: '#3a8c42',
                    700: '#1f4f24',
                    900: '#0f2812',
                },
                gold: {
                    400: '#d4a843',
                    500: '#c49328',
                }
            },
            fontFamily: {
                display: ['Playfair Display', 'serif'],
                body:    ['DM Sans', 'sans-serif'],
            }
        },
    },
    plugins: [],
}
