const galleryItems = document.querySelectorAll('.gallery-item');

// Scroll animations
const scrollFadeElems = document.querySelectorAll('.scroll-fade, .fade-in');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, {
  threshold: 0.1
});

scrollFadeElems.forEach(el => observer.observe(el));

// Gallery filtering
const buttons = document.querySelectorAll('.category-btn');
buttons.forEach(btn => {
  btn.addEventListener('click', () => {
    buttons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const cat = btn.getAttribute('data-category');
    galleryItems.forEach(item => {
      item.style.display = cat === 'all' || item.dataset.category === cat ? 'block' : 'none';
    });
  });
});

// Parallax effect
const parallax = document.querySelector('.parallax-bg');
if (parallax) {
  window.addEventListener('scroll', () => {
    const scroll = window.scrollY;
    parallax.style.transform = `translateY(${scroll * -0.2}px)`;
  });
}

// Navigation toggle
const navToggle = document.getElementById("navToggle");
const navLinks = document.getElementById("navLinks");

navToggle.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});