let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function onLeftButton() {
    showSlides(slideIndex -= 1);
}

function onRightButton() {
    showSlides(slideIndex += 1);
}

// Dot controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Show the slides
function showSlides(n) {
    const slides = document.querySelectorAll("#inner_container .img_container");
    const dots = document.querySelectorAll(".dot");

    if(slides.length === 0) return; // No slides, do nothing

    if(n > slides.length) slideIndex = 1;
    if(n < 1) slideIndex = slides.length;

    slides.forEach(slide => slide.style.display = "none");
    dots.forEach(dot => dot.classList.remove("active"));

    slides[slideIndex - 1].style.display = "block";
    if(dots[slideIndex - 1]) dots[slideIndex - 1].classList.add("active");
}

// Auto slide (optional)
setInterval(() => {
    showSlides(slideIndex += 1);
}, 5000); // Change slide every 5 seconds