document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("indexMainNav");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("index-scrolled-nav");
    } else {
      navbar.classList.remove("index-scrolled-nav");
    }
  });

  const toggle = document.querySelector(".index-footer-dropdown-toggle");
  const menu = document.querySelector(".index-footer-dropdown-menu");

  let isOpen = false;

  toggle.addEventListener("click", (e) => {
    e.preventDefault();
    if (!isOpen) {
      menu.style.display = "block";
      const height = menu.scrollHeight + "px";
      menu.style.height = "0px";
      requestAnimationFrame(() => {
        menu.style.transition = "height 0.4s ease, padding 0.4s ease";
        menu.style.height = height;
        menu.style.padding = "10px";
      });
      isOpen = true;
      toggle.classList.add("open");
    } else {
      menu.style.transition = "height 0.4s ease, padding 0.4s ease";
      menu.style.height = "0px";
      menu.style.padding = "0 10px";
      menu.addEventListener(
        "transitionend",
        () => {
          if (!isOpen) menu.style.display = "none";
        },
        { once: true }
      );
      isOpen = false;
      toggle.classList.remove("open");
    }
  });

  const animateSections = () => {
    const sections = document.querySelectorAll(".index-section-animate");

    sections.forEach((section) => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (sectionTop < windowHeight - 100) {
        section.classList.add("index-section-visible");
      }
    });
  };

  animateSections();
  window.addEventListener("scroll", animateSections);

  const menuBtn = document.querySelector(".index-mobile-menu-btn");
  const overlay = document.querySelector(".index-nav-overlay");

  menuBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    this.classList.toggle("active");
    document.querySelector(".index-nav-links").classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("index-no-scroll");
  });

  function closeMenu() {
    menuBtn.classList.remove("active");
    document.querySelector(".index-nav-links").classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("index-no-scroll");
    document.querySelectorAll(".index-dropdown").forEach((dropdown) => {
      dropdown.classList.remove("active");
    });
  }

  overlay.addEventListener("click", closeMenu);

  document.querySelectorAll(".index-dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      if (window.innerWidth <= 412) {
        e.preventDefault();
        e.stopPropagation();
        this.closest(".index-dropdown").classList.toggle("active");
      }
    });
  });

  document.querySelectorAll(".index-nav-links a").forEach((link) => {
    if (!link.classList.contains("index-dropdown-toggle")) {
      link.addEventListener("click", closeMenu);
    }
  });

  document.addEventListener("click", function (e) {
    if (
      !e.target.closest(".index-navbar-container") &&
      !e.target.closest(".index-nav-links") &&
      document.querySelector(".index-nav-links").classList.contains("active")
    ) {
      closeMenu();
    }
  });

  const footerDropdowns = document.querySelectorAll(".index-footer-dropdown-toggle");
  footerDropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", () => {
      const menu = dropdown.nextElementSibling;
      dropdown.classList.toggle("active");
      menu.classList.toggle("active");
    });
  });
});


//--------------------------------------------------------------------------

//products.php

document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById('productMainNav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('product-scrolled-nav');
    } else {
      navbar.classList.remove('product-scrolled-nav');
    }
  });

  const menuBtn = document.createElement('button');
  menuBtn.className = 'product-mobile-menu-btn';
  menuBtn.innerHTML = '<span></span><span></span><span></span>';
  menuBtn.setAttribute('aria-label', 'Toggle navigation menu');
  
  const overlay = document.createElement('div');
  overlay.className = 'product-nav-overlay';
  
  const navbarContainer = document.querySelector('.product-navbar-container');
  navbarContainer.appendChild(menuBtn);
  document.body.appendChild(overlay);
  
  menuBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    this.classList.toggle('active');
    document.querySelector('.product-nav-links').classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.classList.toggle('product-no-scroll');
  });
  
  function closeMenu() {
    menuBtn.classList.remove('active');
    document.querySelector('.product-nav-links').classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('product-no-scroll');
    document.querySelectorAll('.product-dropdown').forEach(dropdown => {
      dropdown.classList.remove('active');
    });
  }
  
  overlay.addEventListener('click', closeMenu);
  
  document.querySelectorAll('.product-dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      if (window.innerWidth <= 412) {
        e.preventDefault();
        e.stopPropagation();
        this.closest('.product-dropdown').classList.toggle('active');
      }
    });
  });
  
  document.querySelectorAll('.product-nav-links a').forEach(link => {
    if (!link.classList.contains('product-dropdown-toggle')) {
      link.addEventListener('click', closeMenu);
    }
  });
  
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.product-navbar-container') && 
        !e.target.closest('.product-nav-links') && 
        document.querySelector('.product-nav-links').classList.contains('active')) {
      closeMenu();
    }
  });

  // Product Showcase Slideshow
  let slideIndex = 0;
  const slides = document.querySelector('.product-slides');
  const slideElements = document.querySelectorAll('.product-slide');
  const totalSlides = slideElements.length;
  const dots = document.querySelectorAll('.product-dot');
  const prevBtn = document.querySelector('.product-prev');
  const nextBtn = document.querySelector('.product-next');
  const showcaseContainer = document.querySelector('.product-showcase');

  function showSlides(n) {
    if (n >= totalSlides) slideIndex = 0;
    if (n < 0) slideIndex = totalSlides - 1;

    slides.style.transform = `translateX(-${slideIndex * 100}%)`;

    slideElements.forEach((slide, index) => {
      slide.classList.remove('active');
      if (index === slideIndex) {
        slide.classList.add('active');
      }
    });

    dots.forEach(dot => dot.classList.remove('active'));
    dots[slideIndex].classList.add('active');
  }

  function autoSlide() {
    slideIndex++;
    showSlides(slideIndex);
  }

  let slideTimer = setInterval(autoSlide, 4000);

  showcaseContainer.addEventListener('mouseenter', () => clearInterval(slideTimer));
  showcaseContainer.addEventListener('mouseleave', () => {
    slideTimer = setInterval(autoSlide, 4000);
  });

  prevBtn.addEventListener('click', () => {
    clearInterval(slideTimer);
    slideIndex--;
    showSlides(slideIndex);
    slideTimer = setInterval(autoSlide, 4000);
  });

  nextBtn.addEventListener('click', () => {
    clearInterval(slideTimer);
    slideIndex++;
    showSlides(slideIndex);
    slideTimer = setInterval(autoSlide, 4000);
  });

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      clearInterval(slideTimer);
      slideIndex = parseInt(dot.getAttribute('data-slide'));
      showSlides(slideIndex);
      slideTimer = setInterval(autoSlide, 4000);
    });
  });

  showSlides(slideIndex);
});


//-------------------------------------------------------------


//plc.php

document.addEventListener("DOMContentLoaded", () => {
  // Navbar scroll effect
  const navbar = document.getElementById('mainNav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled-nav');
    } else {
      navbar.classList.remove('scrolled-nav');
    }
  });

  // Mobile menu functionality
  const mobileMenuBtn = document.querySelector('.plc-mobile-menu-btn');
  const navLinks = document.querySelector('.plc-nav-links');
  const overlay = document.querySelector('.plc-nav-overlay');

  mobileMenuBtn.addEventListener('click', () => {
    mobileMenuBtn.classList.toggle('active');
    navLinks.classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
  });

  overlay.addEventListener('click', () => {
    mobileMenuBtn.classList.remove('active');
    navLinks.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('no-scroll');
  });

  // Mobile dropdown functionality
  document.querySelectorAll('.plc-dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', function() {
      if (window.innerWidth <= 412) {
        this.closest('.plc-dropdown').classList.toggle('active');
      }
    });
  });

  // Footer dropdown
  const footerToggle = document.querySelector(".plc-footer-dropdown-toggle");
  const footerMenu = document.querySelector(".plc-footer-dropdown-menu");

  let isOpen = false;

  footerToggle.addEventListener("click", (e) => {
    e.preventDefault();
    if (!isOpen) {
      footerMenu.style.display = "block";
      const height = footerMenu.scrollHeight + "px";
      footerMenu.style.height = "0px";
      requestAnimationFrame(() => {
        footerMenu.style.transition = "height 0.4s ease, padding 0.4s ease";
        footerMenu.style.height = height;
        footerMenu.style.padding = "10px";
      });
      isOpen = true;
      footerToggle.classList.add('open');
    } else {
      footerMenu.style.transition = "height 0.4s ease, padding 0.4s ease";
      footerMenu.style.height = "0px";
      footerMenu.style.padding = "0 10px";
      footerMenu.addEventListener(
        "transitionend",
        () => {
          if (!isOpen) footerMenu.style.display = "none";
        },
        { once: true }
      );
      isOpen = false;
      footerToggle.classList.remove('open');
    }
  });

  // Scroll animations for sections
  const animateSections = () => {
    const sections = document.querySelectorAll('.plc-section-animate');
    
    sections.forEach(section => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (sectionTop < windowHeight - 100) {
        section.classList.add('plc-section-visible');
      }
    });
  };

  // Run once on load
  animateSections();
  
  // Run on scroll
  window.addEventListener('scroll', animateSections);
});




//-------------------------------------------------------------

//robotics

document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('robot-nav');
  const navLinks = document.querySelector('.robot-nav-links');
  const menuBtn = document.querySelector('.robot-mobile-menu-btn');
  const dropdownToggles = document.querySelectorAll('.robot-dropdown-toggle');
  const footerDropdownToggle = document.querySelector('.robot-footer-dropdown-toggle');
  const footerDropdownMenu = document.querySelector('.robot-footer-dropdown-menu');

  // Scroll navbar effect
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled-nav');
    } else {
      navbar?.classList.remove('scrolled-nav');
    }
  });

  // Create overlay
  const overlay = document.createElement('div');
  overlay.className = 'robot-nav-overlay';
  document.body.appendChild(overlay);

  // Toggle menu
  const toggleMenu = () => {
    menuBtn.classList.toggle('active');
    navLinks?.classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
  };

  const closeMenu = () => {
    menuBtn.classList.remove('active');
    navLinks?.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('no-scroll');
    document.querySelectorAll('.robot-dropdown').forEach(dropdown => {
      dropdown.classList.remove('active');
    });
  };

  menuBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleMenu();
  });

  overlay.addEventListener('click', closeMenu);

  document.querySelectorAll('.robot-nav-links a').forEach(link => {
    if (!link.classList.contains('robot-dropdown-toggle')) {
      link.addEventListener('click', closeMenu);
    }
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('.robot-nav-container') && 
        !e.target.closest('.robot-nav-links') && 
        navLinks?.classList.contains('active')) {
      closeMenu();
    }
  });

  // Handle navigation dropdowns on small screens
  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        e.stopPropagation();
        this.closest('.robot-dropdown').classList.toggle('active');
      }
    });
  });

  // Handle footer dropdown
  footerDropdownToggle.addEventListener('click', (e) => {
    e.preventDefault();
    footerDropdownToggle.classList.toggle('active');
    footerDropdownMenu.classList.toggle('active');
  });

  // Animate sections on scroll
  const animateSections = () => {
    document.querySelectorAll('.section-animate').forEach(section => {
      if (section.getBoundingClientRect().top < window.innerHeight - 100) {
        section.classList.add('section-visible');
      }
    });
  };

  animateSections();
  window.addEventListener('scroll', animateSections);
});




//biogas.php

// biogas.js
document.addEventListener("DOMContentLoaded", () => {
  // Navbar scroll effect
  const navbar = document.getElementById("mainNav");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled-nav");
    } else {
      navbar.classList.remove("scrolled-nav");
    }
  });

  // Mobile menu functionality
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
  const navLinks = document.querySelector(".nav-links");
  const overlay = document.querySelector(".nav-overlay");

  mobileMenuBtn.addEventListener("click", () => {
    mobileMenuBtn.classList.toggle("active");
    navLinks.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
  });

  overlay.addEventListener("click", () => {
    mobileMenuBtn.classList.remove("active");
    navLinks.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("no-scroll");
  });

  // Mobile dropdown functionality
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function () {
      if (window.innerWidth <= 412) {
        this.closest(".dropdown").classList.toggle("active");
      }
    });
  });

  // Footer dropdown
  const footerToggle = document.querySelector(".footer-dropdown-toggle");
  const footerMenu = document.querySelector(".footer-dropdown-menu");

  let isOpen = false;

  footerToggle.addEventListener("click", (e) => {
    e.preventDefault();
    if (!isOpen) {
      footerMenu.style.display = "block";
      const height = footerMenu.scrollHeight + "px";
      footerMenu.style.height = "0px";
      requestAnimationFrame(() => {
        footerMenu.style.transition = "height 0.4s ease, padding 0.4s ease";
        footerMenu.style.height = height;
        footerMenu.style.padding = "10px";
      });
      isOpen = true;
      footerToggle.classList.add("open");
    } else {
      footerMenu.style.transition = "height 0.4s ease, padding 0.4s ease";
      footerMenu.style.height = "0px";
      footerMenu.style.padding = "0 10px";
      footerMenu.addEventListener(
        "transitionend",
        () => {
          if (!isOpen) footerMenu.style.display = "none";
        },
        { once: true }
      );
      isOpen = false;
      footerToggle.classList.remove("open");
    }
  });

  // Scroll animations for sections
  const animateSections = () => {
    const sections = document.querySelectorAll(".section-animate");

    sections.forEach((section) => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (sectionTop < windowHeight - 100) {
        section.classList.add("section-visible");
      }
    });
  };

  // Run once on load
  animateSections();

  // Run on scroll
  window.addEventListener("scroll", animateSections);
});



//contact.php
document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById('contact-mainNav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('contact-scrolled-nav');
    } else {
      navbar.classList.remove('contact-scrolled-nav');
    }
  });

  const animateSections = () => {
    const sections = document.querySelectorAll('.contact-section-animate');
    sections.forEach(section => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      if (sectionTop < windowHeight - 100) {
        section.classList.add('contact-section-visible');
      }
    });
  };

  animateSections();
  window.addEventListener('scroll', animateSections);

  const footerDropdowns = document.querySelectorAll('.contact-footer-dropdown-toggle');
  footerDropdowns.forEach(dropdown => {
    dropdown.addEventListener('click', (e) => {
      e.preventDefault();
      const menu = dropdown.nextElementSibling;
      const isOpen = menu.style.height && menu.style.height !== '0px';
      
      if (!isOpen) {
        menu.style.display = 'block';
        const height = menu.scrollHeight + 'px';
        menu.style.height = '0px';
        requestAnimationFrame(() => {
          menu.style.transition = 'height 0.4s ease, padding 0.4s ease';
          menu.style.height = height;
          menu.style.padding = '10px';
        });
      } else {
        menu.style.transition = 'height 0.4s ease, padding 0.4s ease';
        menu.style.height = '0px';
        menu.style.padding = '0 10px';
        menu.addEventListener('transitionend', () => {
          if (menu.style.height === '0px') menu.style.display = 'none';
        }, { once: true });
      }
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const menuBtn = document.createElement('button');
  menuBtn.className = 'contact-mobile-menu-btn';
  menuBtn.innerHTML = '<span></span><span></span><span></span>';
  menuBtn.setAttribute('aria-label', 'Toggle navigation menu');
  
  const overlay = document.createElement('div');
  overlay.className = 'contact-nav-overlay';
  
  const navbar = document.querySelector('.contact-navbar-container');
  navbar.appendChild(menuBtn);
  document.body.appendChild(overlay);
  
  menuBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    this.classList.toggle('active');
    document.querySelector('.contact-nav-links').classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.classList.toggle('contact-no-scroll');
  });
  
  function closeMenu() {
    menuBtn.classList.remove('active');
    document.querySelector('.contact-nav-links').classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('contact-no-scroll');
    document.querySelectorAll('.contact-dropdown').forEach(dropdown => {
      dropdown.classList.remove('active');
    });
  }
  
  overlay.addEventListener('click', closeMenu);
  
  document.querySelectorAll('.contact-dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      if (window.innerWidth <= 412) {
        e.preventDefault();
        e.stopPropagation();
        this.closest('.contact-dropdown').classList.toggle('active');
      }
    });
  });
  
  document.querySelectorAll('.contact-nav-links a').forEach(link => {
    if (!link.classList.contains('contact-dropdown-toggle')) {
      link.addEventListener('click', closeMenu);
    }
  });
  
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.contact-navbar-container') && 
        !e.target.closest('.contact-nav-links') && 
        document.querySelector('.contact-nav-links').classList.contains('active')) {
      closeMenu();
    }
  });
});