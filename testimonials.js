document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.testimonial-slider');
    const testimonials = slider.querySelectorAll('.testimonial');
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
  