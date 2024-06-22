import "./bootstrap";
import "preline";
import AOS from "aos";
import "aos/dist/aos.css";
import { gsap } from "gsap";
import { MotionPathPlugin } from "gsap/MotionPathPlugin";

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
        duration: 4,
        ease: "none",
        yoyo: true,
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

MotionPathHelper.create(".astronaut");
