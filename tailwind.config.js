/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                dark: "#0d0d0d",
                oldNavy: "#030617",
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
            backgroundImage: {
                glowBottom: "url('/public/images/glow-bottom.png')",
                glowTop: "url('/public/images/glow-top.png')",
                glowRect: "url('/public/images/glowRect3.png')",
                glowRectBig: "url('/public/images/glowRect2.png')",
                balls: "url('/public/images/balls-2.png')",
            },
            animation: {
                "loop-scroll": "loop-scroll 50s linear infinite",
            },
            keyframes: {
                "loop-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [require("preline/plugin")],
};
