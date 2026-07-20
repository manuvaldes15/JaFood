// Navbar scroll effect and hero blur
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
  const navbar = document.getElementById('navbar');
  const photo = document.querySelector('.photo');
  const currentScrollY = window.scrollY;
  
  // Navbar effect
  if (currentScrollY > 100) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
  
  // Hero blur effect - más pronunciado
  const heroHeight = document.querySelector('.hero-section').offsetHeight;
  const scrollProgress = Math.min(currentScrollY / (heroHeight * 0.5), 1);
  
  if (currentScrollY > lastScrollY && currentScrollY > 50) {
    // Scrolling down - blur more aggressively
    photo.classList.add('blurred');
    photo.style.filter = `blur(${scrollProgress * 12}px) brightness(${1 - scrollProgress * 0.6})`;
  } else if (currentScrollY < lastScrollY) {
    // Scrolling up - clear the blur
    if (currentScrollY < 50) {
      photo.classList.remove('blurred');
      photo.style.filter = 'blur(0px) brightness(1)';
    } else {
      const upScrollProgress = Math.max(0, 1 - (currentScrollY / (heroHeight * 0.3)));
      photo.style.filter = `blur(${(1 - upScrollProgress) * 8}px) brightness(${0.4 + upScrollProgress * 0.6})`;
    }
  }
  
  lastScrollY = currentScrollY;
});

// Mobile navigation toggle
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

navToggle.addEventListener('click', () => {
  navLinks.classList.toggle('open');
});

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
    navLinks.classList.remove('open');
  });
});

// Scroll animations
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, observerOptions);

document.querySelectorAll('.scroll-fade, .scroll-slide-left, .scroll-slide-right').forEach(el => {
  observer.observe(el);
});

// Reviews slider with 3D carousel effect - MEJORADO
let currentSlide = 0;
const slides = document.querySelectorAll('.item');
const totalSlides = slides.length;
const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');

function updateSlidePositions() {
  // Remover todas las clases activas primero
  slides.forEach(slide => {
    slide.classList.remove('active');
    slide.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
  });
  
  slides.forEach((slide, i) => {
    // Calcular la posición relativa al slide activo
    let offset = i - currentSlide;
    
    // Normalizar el offset para manejar el loop circular
    if (offset > totalSlides / 2) {
      offset -= totalSlides;
    } else if (offset < -totalSlides / 2) {
      offset += totalSlides;
    }
    
    let left = '50%'; // Siempre centrar horizontalmente
    let transform = '';
    let opacity = 0.3;
    let zIndex = 0;
    
    switch (offset) {
      case 0:
        // Slide activo - CENTRADO ABSOLUTO
        left = '50%';
        transform = 'translateX(-50%) scale(1) rotateY(0deg) translateZ(0px)';
        opacity = 1;
        zIndex = 10;
        slide.classList.add('active');
        break;
        
      case 1:
        // Derecha inmediata
        left = '70%';
        transform = 'translateX(-50%) scale(0.85) rotateY(25deg) translateZ(-100px)';
        opacity = 0.7;
        zIndex = 8;
        break;
        
      case -1:
        // Izquierda inmediata
        left = '30%';
        transform = 'translateX(-50%) scale(0.85) rotateY(-25deg) translateZ(-100px)';
        opacity = 0.7;
        zIndex = 8;
        break;
        
      case 2:
        // Derecha lejana
        left = '85%';
        transform = 'translateX(-50%) scale(0.7) rotateY(45deg) translateZ(-200px)';
        opacity = 0.4;
        zIndex = 6;
        break;
        
      case -2:
        // Izquierda lejana
        left = '15%';
        transform = 'translateX(-50%) scale(0.7) rotateY(-45deg) translateZ(-200px)';
        opacity = 0.4;
        zIndex = 6;
        break;
        
      default:
        // Slides ocultos
        if (offset > 0) {
          left = '100%';
          transform = 'translateX(-50%) scale(0.5) rotateY(60deg) translateZ(-300px)';
        } else {
          left = '0%';
          transform = 'translateX(-50%) scale(0.5) rotateY(-60deg) translateZ(-300px)';
        }
        opacity = 0;
        zIndex = 1;
    }
    
    // Aplicar los estilos directamente
    slide.style.left = left;
    slide.style.transform = transform;
    slide.style.opacity = opacity;
    slide.style.zIndex = zIndex;
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlidePositions();
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlidePositions();
}

// Event listeners para los botones
if (nextBtn) nextBtn.addEventListener('click', nextSlide);
if (prevBtn) prevBtn.addEventListener('click', prevSlide);

// Auto-advance slides con intervalo más elegante
let autoSlideInterval = setInterval(nextSlide, 6000);

// Pausar auto-advance cuando el usuario interactúa
function pauseAutoSlide() {
  clearInterval(autoSlideInterval);
  autoSlideInterval = setInterval(nextSlide, 6000);
}

if (nextBtn) nextBtn.addEventListener('click', pauseAutoSlide);
if (prevBtn) prevBtn.addEventListener('click', pauseAutoSlide);

// Permitir navegación con teclado
document.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowLeft') {
    prevSlide();
    pauseAutoSlide();
  } else if (e.key === 'ArrowRight') {
    nextSlide();
    pauseAutoSlide();
  }
});

// Inicializar slider después de que se cargue el DOM
document.addEventListener('DOMContentLoaded', () => {
  if (slides.length > 0) {
    updateSlidePositions();
  }
});

// Parallax effect for hero section
window.addEventListener('scroll', () => {
  const scrolled = window.pageYOffset;
  const photo = document.querySelector('.photo');
  const heroContent = document.querySelector('.hero-content');
  
  if (photo) {
    photo.style.transform = `translateY(${scrolled * 0.5}px)`;
  }
  
  if (heroContent) {
    heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
  }
});

// Add stagger animation to review items
const items = document.querySelectorAll('.item');
items.forEach((item, index) => {
  item.style.animationDelay = `${index * 0.1}s`;
});

// Responsive touch support para móviles
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', e => {
  touchStartX = e.changedTouches[0].screenX;
});

document.addEventListener('touchend', e => {
  touchEndX = e.changedTouches[0].screenX;
  handleSwipe();
});

function handleSwipe() {
  const swipeThreshold = 50;
  const swipeDistance = touchEndX - touchStartX;
  
  if (Math.abs(swipeDistance) > swipeThreshold) {
    if (swipeDistance > 0) {
      prevSlide();
    } else {
      nextSlide();
    }
    pauseAutoSlide();
  }
}