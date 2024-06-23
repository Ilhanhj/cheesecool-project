import "./bootstrap";
import "preline";
import AOS from "aos";
import "aos/dist/aos.css";
import { gsap } from "gsap";
import { MotionPathPlugin } from "gsap/MotionPathPlugin";

// JSON file is located in the directory of 'public/js/particlejs-config.json'

AOS.init();

gsap.from("#hero-text", {
    y: 1000,
    stagger: 0.5, // 0.1 seconds between when each ".box" element starts animating
    ease: "power4.out",
    delay: 5,
    opacity: 0,
});

gsap.from("#hero-text-2", {
    y: -1000,
    stagger: 0.5, // 0.1 seconds between when each ".box" element starts animating
    ease: "power4.out",
    delay: 4,
    opacity: 0,
});

gsap.from("#desc-text", {
    y: 1000,
    stagger: 0.5, // 0.1 seconds between when each ".box" element starts animating
    ease: "power4.out",
    opacity: 0,
});

gsap.from("#navbar-gsap", {
    y: -100,
    stagger: 0.5, // 0.5 seconds between when each ".box" element starts animating
    ease: "power4.out",
    delay: 5,
    opacity: 0,
});

gsap.fromTo(
    "#img-cc",
    {
        opacity: 0,
        scale: 0,
        rotation: 400,
    },
    {
        duration: 1,
        delay: 2,
        opacity: 1,
        scale: 1,
        rotation: 0,
    }
);

gsap.fromTo(
    "#bg-gsap",
    {
        opacity: 0,
    },
    {
        duration: 5,
        opacity: 1,
    }
);

gsap.fromTo(
    "#about-gsap",
    {
        opacity: 0,
    },
    {
        duration: 5,
        opacity: 1,
        repeat: -1,
        rotation: "360",
        ease: "none",
        yoyo: true,
    }
);

gsap.fromTo(
    "#tentang",
    {
        opacity: 0,
    },
    {
        duration: 5,
        opacity: 1,
        ease: "none",
    }
);

gsap.fromTo(
    "#bg-gsap-team",
    {
        opacity: 0,
    },
    {
        duration: 5,
        opacity: 1,
        delay: 2,
    }
);

gsap.from("#img-ilhan", {
    x: -1000,
    ease: "power4.out",
    duration: 4,
    opacity: 0,
    delay: 3,
});

gsap.from("#img-iqbal", {
    x: 1000,
    ease: "power4.out",
    duration: 4,
    opacity: 0,
    delay: 3,
});

gsap.from("#auth-gsap", {
    y: 1000,
    ease: "power4.out",
    duration: 4,
});

gsap.registerPlugin(MotionPathPlugin);

gsap.set(".astronaut", { scale: 0.5, autoAlpha: 1 });

gsap.to(".astronaut", {
    duration: 5,
    ease: "power1.inOut",
    immediateRender: true,
    motionPath: {
        path: "#path",
        align: "#path",
        alignOrigin: [0.4, 0.4],
        autoRotate: 90,
    },
});

particlesJS({
    particles: {
        number: {
            value: 160,
            density: {
                enable: true,
                value_area: 800,
            },
        },
        color: {
            value: "#ffffff",
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000",
            },
            polygon: {
                nb_sides: 5,
            },
            image: {
                src: "img/github.svg",
                width: 100,
                height: 100,
            },
        },
        opacity: {
            value: 1,
            random: true,
            anim: {
                enable: true,
                speed: 1,
                opacity_min: 0,
                sync: false,
            },
        },
        size: {
            value: 3,
            random: true,
            anim: {
                enable: false,
                speed: 4,
                size_min: 0.3,
                sync: false,
            },
        },
        line_linked: {
            enable: false,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1,
        },
        move: {
            enable: true,
            speed: 2,
            direction: "top",
            random: true,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 600,
            },
        },
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: {
                enable: false,
                mode: "bubble",
            },
            onclick: {
                enable: false,
                mode: "repulse",
            },
            resize: true,
        },
        modes: {
            grab: {
                distance: 400,
                line_linked: {
                    opacity: 1,
                },
            },
            bubble: {
                distance: 250,
                size: 0,
                duration: 2,
                opacity: 0,
                speed: 3,
            },
            repulse: {
                distance: 400,
                duration: 0.4,
            },
            push: {
                particles_nb: 4,
            },
            remove: {
                particles_nb: 2,
            },
        },
    },
    retina_detect: true,
});
