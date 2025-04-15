<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agaval Solutions - PLC Programming</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <style>
    /* Projects Section Styles */
    .plc-projects-section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .plc-projects-container {
      margin-top: 40px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      padding: 30px;
    }
    
    .plc-project-points {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    .plc-project-point {
      padding: 15px 0 15px 50px;
      position: relative;
      border-bottom: 1px solid #eee;
    }
    
    .plc-project-point:last-child {
      border-bottom: none;
    }
    
    .plc-project-point i {
      position: absolute;
      left: 0;
      top: 15px;
      font-size: 1.5rem;
      color: #0066cc;
      width: 40px;
      height: 40px;
      background: rgba(0, 102, 204, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .plc-project-point h3 {
      margin: 0 0 5px 0;
      color: #333;
      font-size: 1.2rem;
    }
    
    .plc-project-point p {
      margin: 0;
      color: #666;
      line-height: 1.6;
    }
    
    /* Key Features Section */
    .plc-applications-container {
      display: flex;
      flex-direction: row; /* Ensure row layout */
      gap: 40px;
      margin-top: 30px;
      align-items: center;
    }
    
    .plc-applications-content {
      flex: 1;
      min-width: 300px;
      order: 1; /* Content stays on the left */
    }
    
    .plc-applications-image {
      flex: 1;
      min-width: 300px;
      order: 2; /* Image moves to the right */
    }
    
    .plc-applications-image img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .plc-applications-list {
      list-style-type: none;
      padding: 0;
    }
    
    .plc-applications-list li {
      padding: 10px 0 10px 30px;
      position: relative;
      margin-bottom: 10px;
    }
    
    .plc-applications-list li:before {
      content: "";
      position: absolute;
      left: 0;
      top: 15px;
      width: 15px;
      height: 15px;
      background-color: #0066cc;
      border-radius: 50%;
    }

    .plc-applications-list li strong {
      color: #0066cc;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <!-- Top Bar -->
  <div class="plc-top-bar">
    <div class="plc-top-bar-container">
      <div class="contact-info">
        <span><i class="fas fa-envelope contact-icon"></i>agavalsolutions@gmail.com</span>
        <span><i class="fas fa-phone contact-icon"></i>+91 8489369808</span>
      </div>
    </div>
  </div>

  <!-- Navbar with Enhanced Logo -->
  <nav id="mainNav">
    <div class="plc-navbar-container">
      <div class="plc-logo-section">
        <div class="plc-logo-container">
          <img src="images/logo.jpg" alt="Agaval Solutions Logo" class="plc-main-logo" />
          <div class="plc-logo-badge"><i class="fas fa-cogs"></i></div>
        </div>
        <div class="plc-company-name">
          <span class="plc-company-name-main">AGAVAL</span>
          <span class="plc-company-name-sub">SOLUTIONS</span>
        </div>
      </div>
      <button class="plc-mobile-menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="plc-nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <div class="plc-dropdown">
          <button class="plc-dropdown-toggle">Services</button>
          <div class="plc-dropdown-content">
            <a href="plc.php">PLC Programming</a>
            <a href="robot.php">Robotics Integration</a>
            <a href="biogas.php">Automated Customized<br>Machines</a>
          </div>
        </div>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </nav>
  <div class="plc-nav-overlay"></div>

  <!-- Banner -->
  <section class="plc-banner">
    <div class="plc-banner-content">
      <h1>PLC & HMI Programming</h1>
      <p>We provides automation with Robots, PLC, HMI programming & controls</p>
    </div>
  </section>

  <!-- Automated Major Projects Section -->
  <section class="plc-projects-section plc-section-animate">
    <h2>Automated Major Projects</h2>
    <div class="plc-projects-container">
      <ul class="plc-project-points">
        <li class="plc-project-point">
          <i class="fas fa-industry"></i>
          <h3>Nitrogen Purging System for Coal Mills</h3>
          <p>Complete automation solution for safe nitrogen purging in coal mill operations</p>
        </li>
        <li class="plc-project-point">
          <i class="fas fa-recycle"></i>
          <h3>Biogas Purification System</h3>
          <p>Automated control systems for efficient biogas purification processes</p>
        </li>
        <li class="plc-project-point">
          <i class="fas fa-cogs"></i>
          <h3>Timing Belt Machines</h3>
          <p>Precision automation for manufacturing high-quality timing belts</p>
        </li>
        <li class="plc-project-point">
          <i class="fas fa-tshirt"></i>
          <h3>Napkin Production Machines</h3>
          <p>High-speed automated systems for sanitary napkin production lines</p>
        </li>
        <li class="plc-project-point">
          <i class="fas fa-utensils"></i>
          <h3>Automation in Food Industry</h3>
          <p>Hygienic automation solutions meeting food safety standards</p>
        </li>
        <li class="plc-project-point">
          <i class="fas fa-flask"></i>
          <h3>Chemical Mixer Machines</h3>
          <p>Precision-controlled automated systems for chemical mixing applications</p>
        </li>
      </ul>
    </div>

    <h2 style="margin-top: 40px;">Key Features</h2>
    <div class="plc-applications-container">
      <div class="plc-applications-content">
        <ul class="plc-applications-list">
          <li>Start the system by pressing single Button</li>
          <li>Generate operator not required to run the system</li>
          <li>Auto resume system if power failure</li>
          <li>Automatic off/on based on nitrogen consumptions</li>
          <li>Easy Maintenance</li>
        </ul>
      </div>
      <div class="plc-applications-image">
        <img src="images/hmi2.jpg" alt="Nitrogen Generator Control System" />
      </div>
    </div>

    <!-- PLC Communication Section -->
    <h2 style="margin-top: 40px;">PLC Communication</h2>
    <div class="plc-applications-container" style="flex-direction: row-reverse;">
      <div class="plc-applications-content">
        <p>We specialize in implementing robust communication solutions for industrial automation systems, ensuring seamless data exchange between PLCs, HMIs, and other devices.</p>
        
        <ul class="plc-applications-list">
          <li><strong>Ethernet/Industrial Ethernet:</strong> High-speed networking for real-time control and monitoring</li>
          <li><strong>Profibus/Profinet:</strong> Reliable fieldbus communication for industrial automation</li>
          <li><strong>Serial Communication:</strong> RS232/RS485 for legacy systems and specific applications</li>
          <li><strong>Fiber Optical:</strong> Noise-immune long-distance communication for harsh environments</li>
        
        </ul>
      </div>
      <div class="plc-applications-image">
        <img src="images/protocol.jpg" alt="PLC Communication Protocols" />
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="plc-footer">
    <div class="plc-footer-content">
      <div class="plc-footer-section">
        <h3>Agaval Solutions</h3>
        <p>Specialists in Industrial Automation: PLC, HMI, Robotics & Gas Generators</p>
        <p><i class="fas fa-map-marker-alt contact-icon"></i>No.1 Rajev gandhi Street,<br>
           Meenakshi Nagar, Villapuram,<br>
           Madurai 625012</p>
        <p><i class="fas fa-phone contact-icon"></i>+91 8489369808</p>
        <p><i class="fas fa-envelope contact-icon"></i>agavalsolutions@gmail.com</p>
        <p><i class="fas fa-file-invoice contact-icon"></i>GST: 33BADPA0367A1ZO</p>
      </div>

      <div class="plc-footer-section">
        <h3>Quick Links</h3>
        <a href="index.php"><i class="fas fa-home contact-icon"></i>Home</a>
        <a href="about.php"><i class="fas fa-info-circle index-contact-icon"></i>About</a>
        <a href="products.php"><i class="fas fa-box index-contact-icon"></i> Products</a>
        <div class="plc-footer-dropdown">
          <a href="#" class="plc-footer-dropdown-toggle"><i class="fas fa-cogs contact-icon"></i>Services</a>
          <div class="plc-footer-dropdown-menu">
            <a href="plc.php"><i class="fas fa-microchip contact-icon"></i>PLC Programming</a>
            <a href="robot.php"><i class="fas fa-robot contact-icon"></i>Robotics Integration</a>
            <a href="biogas.php"><i class="fas fa-industry contact-icon"></i>Automated Customized Machines</a>
          </div>
        </div>
        <a href="contact.php"><i class="fas fa-address-book contact-icon"></i>Contact</a>
      </div>

      <div class="plc-footer-section">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="https://wa.me/8489369808"><i class="fab fa-whatsapp"></i></a>
          <a href="mailto:agavalsolutions@gmail.com"><i class="fas fa-envelope contact-icon"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>

    <div class="plc-copyright">
      © 2025 Agaval Solutions. All rights reserved.
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>