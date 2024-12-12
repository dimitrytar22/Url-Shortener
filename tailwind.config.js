import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            'pale-dark': '#ECD06F',
            'pale': '#EEE2DC',
            'custom-blue': '#2779a7',
            'light-gray': '#bcb9b9', // светло-серый цвет
            'gray': '#A9A9A9', // обычный серый цвет
            'dark-gray': '#2F4F4F', // темно-серый цвет
            'teal-light': '#64D8D8', // светлый оттенок бирюзового для градиента
            'blue-dark': '#2B3A67', // темный синий для градиента
        },

        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'fade-in': 'fadeIn 1s ease-in-out', // анимация появления
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: 0 },
                    '100%': { opacity: 1 },
                },
            },
        },
    },

    plugins: [forms, typography],
};
