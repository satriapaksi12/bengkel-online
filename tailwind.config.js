const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.blade.{html,js,php}',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                allison: ['Allison', 'sans-serif'],
                titan: ['Titan One', 'cursive'],
                inconsolata: ['Inconsolata', 'monospace'],
                roboto: ['Roboto Mono', 'monospace']
            },
            colors: {
                'ijo': '#4BC274',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('flowbite/plugin'), require('tw-elements/dist/plugin'), ],
};