<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Agaval Solutions</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <style>
    .about-hero {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/about-bg.jpg');
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .about-hero-content {
      max-width: 800px;
      color: white;
      position: relative;
      z-index: 2;
      padding: 0 20px;
    }

    .about-hero h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      line-height: 1.2;
    }

    .about-intro {
      padding: 60px 20px;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
    }

    .about-intro-text {
      flex: 1;
      min-width: 300px;
    }

    .about-intro-image {
      flex: 1;
      min-width: 300px;
    }

    .about-intro-image img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .about-content {
      padding: 0 20px 60px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .about-text {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 40px;
      white-space: pre-line;
    }

    .about-highlight {
      color: #0066cc;
      font-weight: 600;
    }

    .about-mission {
      background-color: #f8f9fa;
      padding: 60px 20px;
      margin: 40px 0;
    }

    .about-mission-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
    }

    .about-mission-text {
      flex: 1;
      min-width: 300px;
    }

    .about-mission-image {
      flex: 1;
      min-width: 300px;
    }

    .about-mission-image img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .about-values {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .about-value-item {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }

    .about-value-item:hover {
      transform: translateY(-5px);
    }

    .about-value-icon {
      font-size: 2rem;
      color: #0066cc;
      margin-bottom: 20px;
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



  <!-- New Intro Section with Image -->
  <section class="about-intro index-section-animate">
    <div class="about-intro-text">
      <h2>Your Trusted Automation Partner</h2>
      <p>Agaval Solutions has been at the forefront of industrial automation in Southern India, delivering cutting-edge solutions to manufacturing industries across various sectors.</p>
      <p>With our deep expertise in PLC programming, robotics integration, and custom automation solutions, we help businesses optimize their operations and increase productivity.</p>
    </div>
    <div class="about-intro-image">
      <img src="images/pr1.jpg" alt="Agaval Solutions Facility">
    </div>
  </section>

  <section class="about-content index-section-animate">
    <div class="about-text">
We let <span class="about-highlight">innovate</span> create the next 
<span class="about-highlight">breakthrough automation</span> in 
Industrial Automation at Madurai, Tamilnadu. 

We are providing <span class="about-highlight">customer satisfied solutions</span> 
based on their requirements in industrial automation. 

<span class="about-highlight">20 years</span> of good experience in PLC and 
Robot automation at various industries. 

To meet your needs and expectations, <span class="about-highlight">dedicated 
teams</span> and tribes are formed. We tightly aligned with your 
business journey...
    </div>

    <div class="about-values">
      <div class="about-value-item">
        <div class="about-value-icon">
          <i class="fas fa-lightbulb"></i>
        </div>
        <h3>Innovation</h3>
        <p>Constantly pushing boundaries to create breakthrough automation solutions</p>
      </div>
      <div class="about-value-item">
        <div class="about-value-icon">
          <i class="fas fa-handshake"></i>
        </div>
        <h3>Customer Focus</h3>
        <p>Tailored solutions designed to meet your specific industrial needs</p>
      </div>
      <div class="about-value-item">
        <div class="about-value-icon">
          <i class="fas fa-award"></i>
        </div>
        <h3>Experience</h3>
        <p>20+ years of expertise in PLC and Robotics automation</p>
      </div>
    </div>
  </section>

  <section class="about-mission">
    <div class="about-mission-container index-section-animate">
      <div class="about-mission-text">
        <h2>Our Mission</h2>
        <p>To revolutionize industrial automation through innovative, reliable, and customized solutions that drive efficiency and productivity for our clients across Tamil Nadu and beyond.</p>
        <p>We are committed to delivering excellence through our deep technical expertise, customer-centric approach, and continuous innovation in automation technologies.</p>
      </div>
      <div class="about-mission-image">
        <img src="images/pr3.jpg" alt="Agaval Solutions Team">
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