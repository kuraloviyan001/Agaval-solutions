<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agaval Solutions</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
 
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="style.css" />
 <style>

.index-industry-expertise {
  background-color: #f8f9fa;
  padding: 60px 0;
  text-align: center;
}

.index-expertise-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.index-expertise-subtitle {
  color: #666;
  margin-bottom: 40px;
  font-size: 1.1rem;
}

.index-expertise-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  margin-top: 40px;
}

.index-expertise-item {
  background: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  transition: transform 0.3s ease;
}

.index-expertise-item:hover {
  transform: translateY(-5px);
}

.index-expertise-icon {
  font-size: 2.5rem;
  color: #0066cc;
  margin-bottom: 20px;
}

/* Services Overview Section */
.index-services-overview {
  padding: 60px 0;
  background: white;
}

.index-services-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  text-align: center;
}

.index-services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 20px;
  margin-top: 40px;
}

.index-service-item {
  padding: 20px 10px;
  border-radius: 8px;
  background: #f8f9fa;
  transition: all 0.3s ease;
}

.index-service-item:hover {
  background: #0066cc;
  color: white;
  transform: translateY(-5px);
}

.index-service-item:hover i {
  color: white;
}

.index-service-item i {
  font-size: 2rem;
  color: #0066cc;
  margin-bottom: 15px;
  display: block;
}

.index-service-item h3 {
  font-size: 1.1rem;
  margin: 0;
}

    
  </style>
</head>
<body>
  <div class="index-top-bar">
    <div class="index-top-bar-container">
      <div class="index-contact-info">
        <span><i class="fas fa-envelope index-contact-icon"></i> agavalsolutions@gmail.com</span>
        <span><i class="fas fa-phone index-contact-icon"></i>+91 8489369808</span>
      </div>
    </div>
  </div>

  <nav class="index-nav" id="index-mainNav">
    <div class="index-navbar-container">
      <div class="index-logo-section">
        <div class="index-logo-container">
          <img src="images/logo.jpg" alt="Agaval Solutions Logo" class="index-main-logo" />
          <div class="index-logo-badge"><i class="fas fa-cogs"></i></div>
        </div>
        <div class="index-company-name">
          <span class="index-company-name-main">AGAVAL</span>
          <span class="index-company-name-sub">SOLUTIONS</span>
        </div>
      </div>
      <div class="index-nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <div class="index-dropdown">
          <span class="index-dropdown-toggle">Services ▾</span>
          <div class="index-dropdown-content">
            <a href="plc.php">PLC Programming</a>
            <a href="robot.php">Robotics Integration</a>
            <a href="biogas.php">Automated Customized<br>Machines</a>
          </div>
        </div>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </nav>

  <section class="index-hero">
    <div class="index-container">
      <div class="index-hero-content">
        <h1>Transforming Industries with Smart Automation</h1>
        <p>Empowering your business for superior efficiency and innovation</p>
      </div>
    </div>
  </section>


  <section class="index-industry-expertise index-section-animate">
    <div class="index-expertise-container">
      <h2>Industry Expertise</h2>
      <p class="index-expertise-subtitle">20+ years experience in industrial automation solutions</p>
      
      <div class="index-expertise-grid">
        <div class="index-expertise-item">
          <div class="index-expertise-icon">
            <i class="fas fa-microchip"></i>
          </div>
          <h3>End-to-End Solutions</h3>
          <p>From design to implementation and maintenance</p>
        </div>
        
        <div class="index-expertise-item">
          <div class="index-expertise-icon">
            <i class="fas fa-user-tie"></i>
          </div>
          <h3>Client-Centric Approach</h3>
          <p>Custom solutions tailored to your specific needs</p>
        </div>
        
        <div class="index-expertise-item">
          <div class="index-expertise-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h3>Global Standards</h3>
          <p>International quality with local support</p>
        </div>
      </div>
    </div>
  </section>

  <section class="index-services-overview index-section-animate">
    <div class="index-services-container">
      <h2>Industrial Automation</h2>
      <div class="index-services-grid">
        <div class="index-service-item">
          <i class="fas fa-project-diagram"></i>
          <h3>PLC Automation</h3>
        </div>
        <div class="index-service-item">
          <i class="fas fa-robot"></i>
          <h3>Robot Automation</h3>
        </div>
        <div class="index-service-item">
          <i class="fas fa-cogs"></i>
          <h3>Drive Control</h3>
        </div>
        <div class="index-service-item">
          <i class="fas fa-tv"></i>
          <h3>HMI/SCADA</h3>
        </div>
        <div class="index-service-item">
          <i class="fas fa-drafting-compass"></i>
          <h3>CAD Drawing</h3>
        </div>
      </div>
    </div>
</section>

  <section class="index-services-section index-section-animate">
    <h2>Major Brands</h2>
    <div class="index-brand-grid">
      <div class="index-brand-item">
        <img src="images/siemes.jpeg" alt="Siemens Logo" onerror="this.src='images/fallback-logo.png'" />
        <h3>Siemens</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/simen2.jpg" alt="Siemens S7 1500/1200 Logo" onerror="this.src='images/fallback-logo.png'" />
        <h3>Siemens S7<br>1500/1200</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/alen.jpeg" alt="Allen Bradley Logo" onerror="this.src='images/fallback-logo.png'" />
        <h3>Allen Bradley</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/delta.jpeg" alt="Delta Logo" onerror="this.src='images/fallback-logo.png'" />
        <h3>Delta</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/kinco.jpeg" alt="Delta Logo" onerror="this.src='images/fallback-logo.png'" />
        <h3>Kinco</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/mit.jpeg" alt="Delta Logo" onerror="this.src='images/fallback-logo.png'" />
        <h3>Mitsubishi</h3>
      </div>
    </div>
  </section>

  <section class="index-services-section index-sectionanimate">
    <h2>Robots Brands</h2>
    <div class="index-brand-grid">
      <div class="index-brand-item">
        <img src="images/kawa.jpg" alt="Kawasaki Logo" />
        <h3>Kawasaki</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/yaskawa.jpg" alt="Yaskawa Logo" />
        <h3>Yaskawa</h3>
      </div>
      <div class="index-brand-item">
        <img src="images/abb.png" alt="ABB Logo" />
        <h3>ABB</h3>
      </div>
    </div>
  </section>

  <section class="index-applications-section index-section-animate">
    <div class="index-applications-container">
      <div class="index-applications-content">
        <h2>Applications We Serve</h2>
        <ul class="index-applications-list">
          <li>Conveyor Lines</li>
          <li>Automatic Robot Cell</li>
          <li>PSA Oxygen Nitrogen Generator</li>
          <li>Jigger machines</li>
          <li>Napkin machines</li>
          <li>Special purpose machines</li>
          <li>Bio Gas Purifier</li>
          <li>Nitrogen Cooling Systems</li>
          <li>Press Line</li>
        </ul>
      </div>
      <div class="index-applications-image">
        <img src="images/panel.jpeg" alt="Applications Image" />
      </div>
    </div>
  </section>

  <footer class="index-footer" id="index-footer">
    <div class="index-footer-content">
      <div class="index-footer-section">
        <h3>Agaval Solutions</h3>
        <p>Specialists in Industrial Automation: PLC, HMI, Robotics & Gas Generators</p>
        <p><i class="fas fa-map-marker-alt index-contact-icon"></i>No.1 Rajev Gandhi Street,<br>
            Meenakshi Nagar, Villapuram,<br>
            Madurai 625012</p>
        <p><i class="fas fa-phone index-contact-icon"></i>+91 8489369808</p>
        <p><i class="fas fa-envelope index-contact-icon"></i>agavalsolutions@gmail.com</p>
        <p><i class="fas fa-file-invoice index-contact-icon"></i>GST: 33BADPA0367A1ZO</p>
      </div>
      <div class="index-footer-section">
        <h3>Quick Links</h3>
        <a href="index.php"><i class="fas fa-home index-contact-icon"></i>Home</a>
        <a href="about.php"><i class="fas fa-info-circle index-contact-icon"></i>About</a>
        <a href="products.php"><i class="fas fa-box index-contact-icon"></i> Products</a>
        <div class="index-footer-dropdown">
          <a href="#" class="index-footer-dropdown-toggle"><i class="fas fa-cogs index-contact-icon"></i>Services</a>
          <div class="index-footer-dropdown-menu">
            <a href="plc.php"><i class="fas fa-microchip index-contact-icon"></i>PLC Programming</a>
            <a href="robot.php"><i class="fas fa-robot index-contact-icon"></i>Robotics Integration</a>
            <a href="biogas.php"><i class="fas fa-industry index-contact-icon"></i>Automated Customized Machines</a>
          </div>
        </div>
        <a href="contact.php"><i class="fas fa-address-book index-contact-icon"></i>Contact</a>
      </div>
      <div class="index-footer-section">
        <h3>Follow Us</h3>
        <div class="index-social-icons">
          <a href="https://wa.me/8489369808"><i class="fab fa-whatsapp"></i></a>
          <a href="mailto:agavalsolutions@gmail.com"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>
    <div class="index-copyright">
      © 2025 Agaval Solutions. All rights reserved.
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const navbar = document.getElementById('index-mainNav');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          navbar.classList.add('index-scrolled-nav');
        } else {
          navbar.classList.remove('index-scrolled-nav');
        }
      });

      const animateSections = () => {
        const sections = document.querySelectorAll('.index-section-animate');
        sections.forEach(section => {
          const sectionTop = section.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;
          if (sectionTop < windowHeight - 100) {
            section.classList.add('index-section-visible');
          }
        });
      };

      animateSections();
      window.addEventListener('scroll', animateSections);
    });

    document.addEventListener('DOMContentLoaded', function() {
      const menuBtn = document.createElement('button');
      menuBtn.className = 'index-mobile-menu-btn';
      menuBtn.innerHTML = '<span></span><span></span><span></span>';
      menuBtn.setAttribute('aria-label', 'Toggle navigation menu');
      
      const overlay = document.createElement('div');
      overlay.className = 'index-nav-overlay';
      
      const navbar = document.querySelector('.index-navbar-container');
      navbar.appendChild(menuBtn);
      document.body.appendChild(overlay);
      
      menuBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        this.classList.toggle('active');
        document.querySelector('.index-nav-links').classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.classList.toggle('index-no-scroll');
      });
      
      function closeMenu() {
        menuBtn.classList.remove('active');
        document.querySelector('.index-nav-links').classList.remove('active');
        overlay.classList.remove('active');
        document.body.classList.remove('index-no-scroll');
        document.querySelectorAll('.index-dropdown').forEach(dropdown => {
          dropdown.classList.remove('active');
        });
      }
      
      overlay.addEventListener('click', closeMenu);
      
      document.querySelectorAll('.index-dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
          if (window.innerWidth <= 412) {
            e.preventDefault();
            e.stopPropagation();
            this.closest('.index-dropdown').classList.toggle('active');
          }
        });
      });
      
      document.querySelectorAll('.index-nav-links a').forEach(link => {
        if (!link.classList.contains('index-dropdown-toggle')) {
          link.addEventListener('click', closeMenu);
        }
      });
      
      document.addEventListener('click', function(e) {
        if (!e.target.closest('.index-navbar-container') && 
            !e.target.closest('.index-nav-links') && 
            document.querySelector('.index-nav-links').classList.contains('active')) {
          closeMenu();
        }
      });

      const footerDropdowns = document.querySelectorAll('.index-footer-dropdown-toggle');
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
  </script>
</body>
</html>