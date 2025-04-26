/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php',
        './js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                'navy': {
                    900: '#1a365d',
                },
                'orange': {
                    500: '#ff5722',
                    600: '#f4511e',
                },
            },
            container: {
                center: true,
                padding: '1rem',
            },
        },
    },
    plugins: [],
} 