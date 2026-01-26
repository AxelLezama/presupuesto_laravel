import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Satoshi', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                current: 'currentColor',
                transparent: 'transparent',
                white: '#FFFFFF',
                black: '#1C2434',
                'black-2': '#010101',
                body: '#64748B',
                bodydark: '#AEB7C0',
                bodydark1: '#DEE4EE',
                bodydark2: '#8A99AF',
                primary: '#3C50E0',
                secondary: '#80CAEE',
                stroke: '#E2E8F0',
                gray: '#EFF4FB',
                graydark: '#333A48',
                'gray-2': '#F7F9FC',
                'gray-3': '#FAFAFA',
                whiten: '#F1F5F9',
                whiter: '#F5F7FD',
                boxdark: '#24303F',
                'boxdark-2': '#1A222C',
                strokedark: '#2E3A47',
                'form-strokedark': '#3d4d60',
                'form-input': '#1d2a39',
                success: '#219653',
                danger: '#D34053',
                warning: '#FFA70B',
            }
        },
    },
    plugins: [],
};