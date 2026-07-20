
    // Navbar scroll effect
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', () => {
      const navbar = document.getElementById('navbar');
      const currentScrollY = window.scrollY;
      
      if (currentScrollY > 100) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
      
      lastScrollY = currentScrollY;
    });

    // Mobile navigation toggle
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    if (navToggle && navLinks) {
      navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
      });
    }

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
        if (navLinks) navLinks.classList.remove('open');
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

    document.querySelectorAll('.scroll-fade').forEach(el => {
      observer.observe(el);
    });

    // Carousel functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll('.item');
    const totalSlides = slides.length;
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    function updateSlidePositions() {
      slides.forEach((slide, index) => {
        // Remove all classes
        slide.classList.remove('active', 'next', 'prev', 'next-2', 'prev-2', 'hidden');
        
        // Calculate position relative to current slide
        let position = index - currentSlide;
        
        // Normalize position for circular carousel
        if (position > totalSlides / 2) {
          position -= totalSlides;
        } else if (position < -totalSlides / 2) {
          position += totalSlides;
        }
        
        // Apply appropriate class based on position
        if (position === 0) {
          slide.classList.add('active');
        } else if (position === 1) {
          slide.classList.add('next');
        } else if (position === -1) {
          slide.classList.add('prev');
        } else if (position === 2) {
          slide.classList.add('next-2');
        } else if (position === -2) {
          slide.classList.add('prev-2');
        } else {
          slide.classList.add('hidden');
        }
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

    // Event listeners
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);

    // Auto-advance slides
    let autoSlideInterval = setInterval(nextSlide, 5000);

    // Pause auto-advance on hover
    const carouselContainer = document.querySelector('.carousel-container');
    if (carouselContainer) {
      carouselContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
      });
      
      carouselContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(nextSlide, 5000);
      });
    }

    // Initialize slider
    updateSlidePositions();

    // Touch/swipe support for mobile
    let startX = 0;
    let isDragging = false;

    if (carouselContainer) {
      carouselContainer.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
      });

      carouselContainer.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
      });

      carouselContainer.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        
        const endX = e.changedTouches[0].clientX;
        const diffX = startX - endX;
        
        if (Math.abs(diffX) > 50) {
          if (diffX > 0) {
            nextSlide();
          } else {
            prevSlide();
          }
        }
      });
    }
