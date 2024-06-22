import particlesJS from "particles.js";

particlesJS.load("particles-js", "particles.json", function () {
    console.log("particles.js loaded - callback");
});

window.addEventListener("load", function () {
    document.body.classList.add("loaded");
});
