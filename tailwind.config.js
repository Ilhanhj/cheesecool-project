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
                heroBg: "url('/public/images/bg-hero.jpg')",
                teamBg: "url('/public/images/bg-team-2.jpg')",
                glowBottom: "url('/public/images/glow-bottom.png')",
                glowTop: "url('/public/images/glow-top.png')",
                squaredBg3: "url('/public/images/squared-bg-element-3.png')",
            },
        },
    },
    plugins: [require("preline/plugin")],
};
