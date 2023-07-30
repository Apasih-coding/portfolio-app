const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'poppins': 'Poppins',
            },
            colors:{
                blue:{
                  101: '#34BBB2',
                  102: '#8afff8',
                  103: '#010031',
                  104: '#3A3D63',
                  105: '#032a3b',
                },
                black:{
                  101: '#010031',
                },
                brown:{
                  101: '#e5cda7',
                },
                gray:{
                  101: '#A6A6AB',
                  102: 'rgba(58, 61, 99, 0.60)',
                  103: 'rgba(217, 217, 217, 0.43)',
                  104: 'rgba(0, 0, 0, 0.60)',
                  105: '#3A3D63',
                  106: '#abc3d6',
                },
                red:{
                  101: '#B22221',
                  103: '#E96735',
                },
            },
            fontFamily:{
            'poppins': 'Poppins',
            },
            fontWeight:{
            'kandel': '700',
            },
            fontSize:{
            '24px': '24px',
            '32': '32px',
            '48': '48px',
            },
            height:{
            '69': '69px',
            '82': '82px',
            '138': '138px',
            '210': '210px',
            '435': '435px',
            '537': '537px',
            '561': '561px',
            '580': '580px',
            '651': '651px',
            },
            width:{
            '210': '230px',
            '247': '247px',
            '284': '284px',
            '350': '350px',
            '464': '464px',
            '578': '578px',
            '651': '651px',
            'xxl': '1078px',
            },
            spacing:{
            '25':'25px',
            '45':'45px',
            '60':'60px',
            '80':'80px',
            '105':'105px',
            '125':'125px',
            '175':'175px',
            '400': '400px',
            'minus':'-242px',
            },
            borderRadius:{
            '4xl': '50px',
            },
            zIndex:{
              '100': '100',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
