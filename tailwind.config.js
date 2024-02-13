/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.{html,js,php}"],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#FFFFFF',
                    100: '#DFF0F4',
                    200: '#F5F9FA',
                    300: '#F5FDFF',
                    400: '#F3FAFC',
                    500: '#0A91B1',
                    600: '#0B485B',
                    700: '#13544E',
                    800: '#BBDFE8',
                    900: '#0B485B',
                    950: '#212121',
                },
                gray: {
                    50: '#f8fafc',
                    100: '#F4F4F4',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#555B6A',
                    500: '#404744',
                    600: '#404744',
                    700: '#093344',
                    800: '#1e293b',
                    900: '#404744',
                    950: '#020617',
                },
            },
            fontFamily: {
                inter: ['Inter', 'sans-serif'],
                literata: ['Literata', 'serif'],
            },
            boxShadow: {
                '3xl': '6px 20px 100px rgba(0, 0, 0, 0.1)',
            },
        },
    },
    plugins: [],
}

