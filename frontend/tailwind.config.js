const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {   
    content: ['./src/**/*.{html,js}'],   
    theme: {
        extend: {
            fontFamily: {
                'montserrat': ['"Montserrat"',  ...defaultTheme.fontFamily.sans],
                'poppins': ['"Poppins"', ...defaultTheme.fontFamily.sans],
            }
        }
    }, 
};