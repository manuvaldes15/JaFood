
    // Navbar scroll effect
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    });

    // Navbar toggle (mobile)
    const navToggle = document.getElementById("navToggle");
    const navLinks = document.getElementById("navLinks");
    navToggle.addEventListener("click", () => {
      navLinks.classList.toggle("open");
    });

    // Scroll animation logic
    const scrollElements = document.querySelectorAll(".scroll-fade, .scroll-slide-left, .scroll-slide-right");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, {
      threshold: 0.2
    });

    scrollElements.forEach(el => observer.observe(el));