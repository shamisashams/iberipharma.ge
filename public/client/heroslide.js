const heroSlide = document.querySelectorAll(".hero_slide");
const slider = document.getElementById("hero_slider");
const currentSlide = document.getElementsByClassName("current");
const prevSlide = document.getElementById("prev_hero");
const nextSlide = document.getElementById("next_hero");

let slideNumber = 0;
let dotNumber = 0;

//  hero slider

const goPrevSlide = () => {
    currentSlide[0].classList.remove("current");
    if (slideNumber == 0) {
        slideNumber = heroSlide.length - 1;
    } else {
        slideNumber = slideNumber - 1;
    }
    heroSlide[slideNumber].classList.add("current");
};
const goNextSlide = () => {
    currentSlide[0].classList.remove("current");
    if (slideNumber == heroSlide.length - 1) {
        slideNumber = 0;
    } else {
        slideNumber = slideNumber + 1;
    }
    heroSlide[slideNumber].classList.add("current");
};

if (prevSlide && nextSlide) {
    prevSlide.addEventListener("click", function () {
        goPrevSlide();
    });
    nextSlide.addEventListener("click", function () {
        goNextSlide();
    });
}

const interval = setInterval(function () {
    currentSlide[0].classList.remove("current");
    if (slideNumber == heroSlide.length - 1) {
        slideNumber = 0;
    } else {
        slideNumber = slideNumber + 1;
    }
    heroSlide[slideNumber].classList.add("current");
}, 3000);
