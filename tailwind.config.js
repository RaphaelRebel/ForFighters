const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Rubik', ...defaultTheme.fontFamily.sans],
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif],
            },
            fontWeight: {
                normal: 300,
                medium: 400,
                bold: 500,
                heavy: 700
            },
            backgroundImage:  theme =>({
                'landingspage': "url('/fotos/landingspage.png')",
            }),
        },
    },
    plugins: [require('@tailwindcss/forms')],
}
