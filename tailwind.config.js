/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                dark: "#0d0d0d",
            },
            fontFamily: {
                poppins: "poppins",
            },
            fontSize: {
                sm: ["14px", "20px"],
                base: ["16px", "24px"],
                lg: ["18px", "28px"],
                xl: ["20px", "28px"],
                "3xl": ["32px", "38px"],
            },
        },
    },
    plugins: [require("preline/plugin")],
};
