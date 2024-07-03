/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': "#004080",
                'secondary': "#1DCAF4",
                'tertiary': "#FF6B00",
                'quaternary': "#FFC000",
            },
            backgroundImage: {
                pattern: "url('../../public/img/bg-pattern.png')",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};
