import './bootstrap';
import './bootstrap';

// Carsoul Image
let currentSlide = 0;
const slides = document.querySelectorAll('[data-carousel-item]');
const indicators = document.querySelectorAll('[data-carousel-indicators] button');
const carouselInner = document.querySelector('[data-carousel-inner]');
const prevButton = document.querySelector('[data-carousel-prev]');
const nextButton = document.querySelector('[data-carousel-next]');

// Function to change slide
function changeSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    updateCarousel();
}

// Function to go to the previous slide
function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    updateCarousel();
}

// Function to go to the next slide
function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    updateCarousel();
}

// Update the carousel to show the current slide
function updateCarousel() {
    // Hide all slides
    slides.forEach(slide => slide.classList.add('hidden'));

    // Show the current slide
    slides[currentSlide].classList.remove('hidden');

    // Update indicators
    indicators.forEach((indicator, index) => {
        if (index === currentSlide) {
            indicator.classList.add('bg-gray-400');
            indicator.classList.remove('bg-gray-300');
        } else {
            indicator.classList.remove('bg-gray-400');
            indicator.classList.add('bg-gray-300');
        }
    });
}

// Automatically change slide every 5 seconds
let slideInterval = setInterval(changeSlide, 3000);

// Stop autoplay on hover and resume when mouse leaves
carouselInner.addEventListener('mouseenter', () => {
    clearInterval(slideInterval);
});

carouselInner.addEventListener('mouseleave', () => {
    slideInterval = setInterval(changeSlide, 3000);
});

// Handle indicator click
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentSlide = index;
        updateCarousel();
    });
});

// Handle previous and next buttons
prevButton.addEventListener('click', prevSlide);
nextButton.addEventListener('click', nextSlide);

// Initialize carousel
updateCarousel();

