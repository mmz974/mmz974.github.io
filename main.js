const testimonials = document.querySelectorAll('.testimonial');
let currentTestimonial = 0;

function changeTestimonial() {
  testimonials[currentTestimonial].style.display = 'none';
  currentTestimonial = (currentTestimonial + 1) % testimonials.length;
  testimonials[currentTestimonial].style.display = 'block';
}

setInterval(changeTestimonial, 5000); // Change le témoignage toutes les 5000ms (5 secondes)
