// Get the modals
var loginModal = document.getElementById("loginModal");

// Functions to open and close login modal
function openLoginModal() {
    loginModal.style.display = "flex";
}

function closeLoginModal() {
    loginModal.style.display = "none";
}

// Get the buttons
var loginBtn = document.getElementById("loginBtn");

// Add event listener to the login button to open the login modal
loginBtn.addEventListener("click", function () {
    openLoginModal();
});

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }
}

// Get the input fields
const birthdateInput = document.querySelector('input[type="date"]');
const ageInput = document.getElementById('age');

// Add event listener to the birthdate input
birthdateInput.addEventListener('change', calculateAge);

// Function to calculate age
function calculateAge() {
    const birthdate = new Date(birthdateInput.value);
    const today = new Date();
    let age = today.getFullYear() - birthdate.getFullYear();
    const monthDiff = today.getMonth() - birthdate.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate.getDate())) {
        age--;
    }
    ageInput.value = age;
}

// JavaScript for the image slider
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
const prevBtn = document.querySelector('.slider-prev');
const nextBtn = document.querySelector('.slider-next');
let autoSlideInterval;

function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
}

function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 5000); // Start auto-sliding
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval); // Clear existing interval
    startAutoSlide(); // Start auto-sliding again
}

startAutoSlide(); // Start auto-sliding initially

// Add event listeners for navigation buttons
prevBtn.addEventListener('click', () => {
    prevSlide();
    resetAutoSlide(); // Reset auto-slide interval on manual navigation
});

nextBtn.addEventListener('click', () => {
    nextSlide();
    resetAutoSlide(); // Reset auto-slide interval on manual navigation
});

 document.addEventListener('DOMContentLoaded', function() {
            // Get a reference to the button element
            var registerBtn = document.getElementById('registerBtn');

            // Add a click event listener to the button
            registerBtn.addEventListener('click', function() {
                // Navigate to register.php
                window.location.href = './landing/register.php';
            });
        });
