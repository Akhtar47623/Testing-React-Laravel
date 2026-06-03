/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: { max: "767px" },
            },
            borderWidth: {
                1: "1px",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
