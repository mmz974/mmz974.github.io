document.addEventListener('DOMContentLoaded', function () {
    // Code pour le menu hamburger
    const navMenu = document.querySelector('.nav-menu');
    const hamburger = document.createElement('button');
  
    hamburger.classList.add('hamburger');
    hamburger.textContent = '☰';
    hamburger.addEventListener('click', function () {
      navMenu.classList.toggle('visible');
    });
  
    navMenu.parentNode.insertBefore(hamburger, navMenu);
  
    // Code pour le défilement des témoignages
    const slider = document.querySelector('.testimonial-slider');
    const testimonials = slider.querySelectorAll('blockquote');
    let currentIndex = 0;
  
    function nextTestimonial() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      testimonials.forEach((testimonial, index) => {
        if (index === currentIndex) {
          testimonial.style.transform = 'translateX(0)';
        } else {
          testimonial.style.transform = 'translateX(-100%)';
        }
      });
    }
  
    setInterval(nextTestimonial, 5000); // Changez pour définir l'intervalle souhaité (en millisecondes)
  });
  