<?php
// Include the database connection file (uncomment once db_connect.php is ready)
// include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durga Printers | Official Printing Partner</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800&family=Montserrat:wght@500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Advanced CSS Variables for Corporate Theme */
        :root {
            --primary: #d32f2f; /* Durga Red */
            --primary-dark: #b71c1c;
            --secondary: #ffb300; /* Yellow */
            --dark: #111111;
            --text-main: #444444;
            --bg-pure: #ffffff;
            --bg-off: #f4f6f8;
            --shadow-sm: 0 5px 15px rgba(0,0,0,0.05);
            --shadow-lg: 0 20px 40px rgba(0,0,0,0.12);
            --font-brand: 'Cinzel', serif;
            --font-head: 'Montserrat', sans-serif;
            --font-body: 'Poppins', sans-serif;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: var(--font-body); color: var(--text-main); background-color: var(--bg-pure); overflow-x: hidden; }
        h1, h2, h3, h4 { font-family: var(--font-head); color: var(--dark); }
        a { text-decoration: none; color: inherit; }

        /* --- Floating WhatsApp Button --- */
        .float-wa {
            position: fixed; bottom: 30px; right: 30px; background-color: #25D366; color: #FFF;
            border-radius: 50%; width: 65px; height: 65px; display: flex; align-items: center; justify-content: center;
            font-size: 35px; box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4); z-index: 9999; transition: all 0.3s ease;
        }
        .float-wa:hover { transform: scale(1.1); box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6); }

        /* --- Header & Navigation --- */
        header {
            display: flex; justify-content: space-between; align-items: center; padding: 12px 5%;
            background: var(--bg-pure); box-shadow: var(--shadow-sm); position: sticky; top: 0; z-index: 1000;
        }
        .logo-section { display: flex; align-items: center; gap: 15px; }
        .logo-section img { height: 75px; object-fit: contain; }
        .brand-text h1 { font-family: var(--font-brand); font-size: 32px; font-weight: 800; color: var(--primary); text-transform: uppercase; line-height: 1; letter-spacing: 1px; }
        .brand-text p { font-size: 13px; font-weight: 600; color: #777; font-style: italic; letter-spacing: 2px; margin-top: 4px; }

        /* Header Actions (Location + Contact) */
        .header-actions { display: flex; gap: 15px; align-items: center; }
        
        .location-btn {
            background: var(--bg-pure); color: var(--primary); border: 2px solid var(--primary);
            padding: 10px 22px; font-size: 14px; font-family: var(--font-head); font-weight: 700;
            border-radius: 30px; display: flex; align-items: center; gap: 8px; transition: all 0.3s;
        }
        .location-btn:hover { background: var(--primary); color: var(--bg-pure); box-shadow: 0 5px 15px rgba(211, 47, 47, 0.3); }

        .nav-menu { position: relative; }
        .contact-btn {
            background: var(--dark); color: var(--bg-pure); border: none; padding: 12px 25px;
            font-size: 15px; font-family: var(--font-head); font-weight: 600; border-radius: 30px;
            cursor: pointer; display: flex; align-items: center; gap: 10px; transition: background 0.3s;
        }
        .contact-btn:hover { background: var(--primary-dark); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .contact-dropdown {
            display: none; position: absolute; top: 120%; right: 0; background: var(--bg-pure);
            min-width: 240px; box-shadow: var(--shadow-lg); border-radius: 12px; overflow: hidden;
            border: 1px solid #eaeaea; animation: fadeInDown 0.3s ease;
        }
        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
        .contact-dropdown.show { display: block; }
        .contact-dropdown a {
            display: flex; align-items: center; gap: 15px; padding: 16px 20px; color: var(--dark);
            font-weight: 600; font-size: 14px; border-bottom: 1px solid #f0f0f0; transition: background 0.3s;
        }
        .contact-dropdown a:hover { background: var(--bg-off); color: var(--primary); padding-left: 25px;}
        .icon-wa { color: #25D366; font-size: 20px;}
        .icon-phone { color: var(--primary); font-size: 18px;}
        .icon-mail { color: var(--secondary); font-size: 18px;}

        /* --- Slider Banners (UPDATED: 400px height) --- */
        .slider-wrapper { position: relative; width: 100%; height: 400px; overflow: hidden; background: var(--dark); }
        .slider-track { display: flex; width: 500%; height: 100%; transition: transform 0.8s cubic-bezier(0.25, 0.8, 0.25, 1); }
        .slide { width: 100%; height: 100%; position: relative; display: flex; align-items: center; justify-content: center; background-size: cover; background-position: center; }
        
        .dots-container { position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 10; }
        .dot { width: 12px; height: 12px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; cursor: pointer; transition: all 0.3s; }
        .dot.active { background: var(--primary); transform: scale(1.4); }

        /* --- Section Titles --- */
        .section-title { text-align: center; font-size: 42px; font-weight: 800; margin: 90px 0 50px; color: var(--dark); position: relative; padding-bottom: 15px; }
        .section-title::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 80px; height: 5px; background: var(--primary); border-radius: 3px; }

        /* --- HIGH-END SERVICE CARDS (Perfect 4-Division Grid) --- */
        .services-wrapper { padding: 0 3%; max-width: 1600px; margin: 0 auto; }
        .services-grid { 
            display: grid; 
            grid-template-columns: repeat(4, 1fr); /* Forces exactly 4 equal columns */
            gap: 25px; 
        }
        .service-card {
            position: relative; border-radius: 20px; overflow: hidden; height: 450px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08); cursor: pointer; background: var(--dark);
            transition: all 0.4s ease; border: 1px solid rgba(0,0,0,0.05);
        }
        .service-card:hover { transform: translateY(-15px); box-shadow: 0 20px 40px rgba(211, 47, 47, 0.2); }
        
        .service-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s ease; opacity: 0.9; }
        .service-card:hover .service-img { transform: scale(1.1); opacity: 0.5; } /* Darkens image on hover to make text pop */
        
        /* Premium Floating Icon */
        .service-icon {
            position: absolute; top: 20px; right: 20px; background: var(--bg-pure);
            width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 24px; color: var(--primary); box-shadow: 0 5px 15px rgba(0,0,0,0.2); z-index: 5;
            transition: all 0.4s ease; border: 2px solid transparent;
        }
        .service-card:hover .service-icon { background: var(--primary); color: var(--bg-pure); transform: rotateY(360deg); }

        .service-content {
            position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 25px 25px;
            background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.7) 50%, transparent 100%);
            color: var(--bg-pure); transition: all 0.4s ease;
        }
        .service-card:hover .service-content { background: linear-gradient(to top, rgba(211,47,47,0.95) 0%, rgba(211,47,47,0.8) 60%, transparent 100%); }
        
        .service-content h3 { color: var(--bg-pure); font-size: 26px; margin-bottom: 12px; font-weight: 800; letter-spacing: 0.5px;}
        .service-content p { font-size: 15px; opacity: 0.9; line-height: 1.6; font-weight: 300; }
        
        /* "Click to View" Indicator */
        .view-more {
            margin-top: 15px; display: inline-block; font-size: 13px; font-weight: 600; text-transform: uppercase;
            letter-spacing: 1px; color: var(--secondary); opacity: 0; transform: translateY(10px); transition: all 0.3s;
        }
        .service-card:hover .view-more { opacity: 1; transform: translateY(0); }

        /* --- Advanced Service Modal (Product Grid) --- */
        .modal {
            display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.85); z-index: 2000; align-items: center; justify-content: center; backdrop-filter: blur(8px);
        }
        .modal-content {
            background: var(--bg-off); width: 95%; max-width: 1300px; max-height: 90vh;
            border-radius: 20px; box-shadow: 0 25px 50px rgba(0,0,0,0.3); overflow-y: auto; position: relative; padding: 40px;
            animation: fadeIn 0.4s ease; border: 1px solid #fff;
        }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .close-btn { position: absolute; top: 25px; right: 35px; font-size: 45px; cursor: pointer; color: var(--text-main); transition: color 0.3s;}
        .close-btn:hover { color: var(--primary); }
        .modal-header h2 { font-size: 34px; color: var(--dark); margin-bottom: 5px; font-weight: 800;}
        .modal-header p { color: #666; font-size: 15px; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #ddd;}
        
        .modal-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 25px; }
        .modal-item {
            background: var(--bg-pure); border-radius: 12px; padding: 15px; text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.04); transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #f0f0f0; display: flex; flex-direction: column; align-items: center; justify-content: space-between;
        }
        .modal-item:hover { transform: translateY(-8px); box-shadow: var(--shadow-sm); border-color: var(--primary); }
        .modal-item img { width: 100%; height: 160px; object-fit: contain; border-radius: 8px; margin-bottom: 15px; background: #f9f9f9;}
        .modal-item h4 { font-size: 15px; color: var(--dark); margin: 0; font-weight: 700; }

        /* --- Who We Are --- */
        .about-wrapper { padding: 20px 10% 50px; }
        .about-row { display: flex; align-items: center; gap: 60px; margin-bottom: 80px; }
        .about-row.reverse { flex-direction: row-reverse; }
        .about-img { width: 50%; border-radius: 20px; box-shadow: var(--shadow-lg); overflow: hidden; }
        .about-img img { width: 100%; height: 400px; object-fit: cover; display: block; transition: transform 0.5s;}
        .about-img:hover img { transform: scale(1.05); }
        .about-text { width: 50%; }
        .about-text h3 { font-size: 32px; color: var(--primary); margin-bottom: 20px; }
        .about-text p { font-size: 16px; line-height: 1.8; color: var(--text-main); font-weight: 400; }

        /* --- Expanded Customers Grid (UPDATED: 6 in a row) --- */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(6, 1fr); 
            gap: 20px; padding: 20px 10% 80px; text-align: center;
        }
        .grid-card {
            background: var(--bg-pure); padding: 25px 15px; border-radius: 12px;
            box-shadow: var(--shadow-sm); border: 1px solid #f0f0f0; transition: all 0.3s;
            display: flex; flex-direction: column; align-items: center; justify-content: center;
        }
        .grid-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); border-color: var(--primary-light); }
        /* Removed margin-bottom since there is no text */
        .grid-card img { width: 80px; height: 80px; object-fit: contain; } 

        /* --- Footer --- */
        footer { background: var(--dark); color: var(--bg-pure); padding: 70px 0 30px; text-align: center; position: relative; }
        .footer-logo { display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 30px;}
        .footer-logo img { height: 80px; filter: brightness(0) invert(1); opacity: 0.9;}
        .footer-brand h2 { font-family: var(--font-brand); color: var(--bg-pure); font-size: 30px; text-transform: uppercase; line-height: 1;}
        .footer-brand p { font-size: 14px; font-style: italic; color: #aaa;}
        
        .footer-pills { display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-bottom: 50px;}
        .footer-pills a { background: var(--bg-pure); color: var(--dark); padding: 14px 35px; border-radius: 30px; font-weight: 700; transition: 0.3s; box-shadow: var(--shadow-sm); font-size: 15px;}
        .footer-pills a:hover { transform: translateY(-4px); box-shadow: 0 10px 20px rgba(0,0,0,0.5);}
        .btn-wa { background: #25D366 !important; color: white !important; border: 2px solid #25D366;}
        .btn-mail { background: var(--primary) !important; color: white !important; border: 2px solid var(--primary);}
        .btn-phone { background: transparent !important; color: var(--bg-pure) !important; border: 2px solid var(--bg-pure);}

        .copyright { font-size: 14px; color: #888; border-top: 1px solid #333; padding-top: 30px; }
        
        /* Creator Credit Styling */
        .creator-credit { position: absolute; bottom: 15px; left: 15px; font-size: 10px; color: #555; font-weight: 500; opacity: 0.7; }

        /* Responsive */
        @media (max-width: 1100px) {
            .services-grid { grid-template-columns: repeat(2, 1fr); }
            .grid-container { grid-template-columns: repeat(4, 1fr); } 
        }
        @media (max-width: 900px) {
            .header-actions { flex-direction: column; gap: 10px; align-items: flex-end;}
            .about-row, .about-row.reverse { flex-direction: column; text-align: center; }
            .about-img, .about-text { width: 100%; }
            .brand-text h1 { font-size: 24px; }
            .footer-pills { flex-direction: column; gap: 15px; width: 100%; padding: 0 10%;}
            .footer-pills a { width: 100%; }
            .grid-container { grid-template-columns: repeat(3, 1fr); } 
        }
        @media (max-width: 600px) {
            .services-grid { grid-template-columns: 1fr; } 
            .grid-container { grid-template-columns: repeat(2, 1fr); } 
        }
    </style>
</head>
<body>

    <a href="https://wa.me/919481660707" class="float-wa" target="_blank" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <header>
        <div class="logo-section">
            <img src="durga_logo.png" alt="Durga Printers Logo" onerror="this.src='https://via.placeholder.com/150x80?text=LOGO'">
            <div class="brand-text">
                <h1>Durga Printers</h1>
                <p>For a-z in printing</p>
            </div>
        </div>
        
        <div class="header-actions">
            <a href="https://maps.google.com/?q=571+MIG,+3rd+Main,+4th+Cross,+4th+Phase,+Yelahanka+New+Town,+Bengaluru-560064" target="_blank" class="location-btn">
                <i class="fas fa-map-marker-alt"></i> Locate Us
            </a>
            
            <div class="nav-menu">
                <button onclick="toggleContact()" class="contact-btn">
                    Contact Us <i class="fas fa-chevron-down" id="contactArrow"></i>
                </button>
                <div id="contactDropdown" class="contact-dropdown">
                    <a href="tel:+919513616667"><i class="fas fa-phone-alt icon-phone"></i> +91 95136 16667</a>
                    <a href="https://wa.me/919481660707" target="_blank"><i class="fab fa-whatsapp icon-wa"></i> +91 94816 60707</a>
                    <a href="mailto:durgaprintservices@gmail.com"><i class="fas fa-envelope icon-mail"></i> durgaprintservices@gmail.com</a>
                </div>
            </div>
        </div>
    </header>

    <div class="slider-wrapper">
        <div class="slider-track" id="sliderTrack">
            <div class="slide" style="background-image: url('banners/main.png');"></div>
            <div class="slide" style="background-image: url('banners/2nd.png');"></div>
            <div class="slide" style="background-image: url('banners/3rd.png');"></div>
            <div class="slide" style="background-image: url('banners/4th1.png');"></div>
            <div class="slide" style="background-image: url('banners/5th.png');"></div>
        </div>
        
        <div class="dots-container">
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
            <span class="dot" onclick="goToSlide(4)"></span>
        </div>
    </div>

    <h2 class="section-title">Our Printing Divisions</h2>
    <div class="services-wrapper">
        <div class="services-grid">
            
            <div class="service-card" onclick="openServiceModal('printing')">
                <div class="service-icon"><i class="fas fa-print"></i></div>
                <img src="uploads/printing/Brochures.jpg" alt="Commercial Printing" class="service-img" onerror="this.src='uploads/printing/Printing1.png'">
                <div class="service-content">
                    <h3>Paper & Print Media</h3>
                    <p>Complete catalog of commercial bill books, premium business cards, brochures, and daily office stationery.</p>
                    <span class="view-more">View 30+ Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            
            <div class="service-card" onclick="openServiceModal('gifts')">
                <div class="service-icon"><i class="fas fa-gift"></i></div>
                <img src="uploads/printing/Gift Cards.jpg" alt="Corporate Merch" class="service-img" onerror="this.src='uploads/printing/Corporate1.png'">
                <div class="service-content">
                    <h3>Corporate Merch</h3>
                    <p>Customized branded apparel, premium drinkware, tech accessories, and executive corporate gifting solutions.</p>
                    <span class="view-more">View 20+ Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            
            <div class="service-card" onclick="openServiceModal('signage')">
                <div class="service-icon"><i class="fas fa-sign"></i></div>
                <img src="uploads/printing/Big Posters.jpg" alt="Display Signages" class="service-img" onerror="this.src='uploads/Display & Signage Media/Display & Signage Media.png'">
                <div class="service-content">
                    <h3>Display Signages</h3>
                    <p>High-visibility LED boards, large format vinyl wrapping, outdoor canopies, and architectural metal signage.</p>
                    <span class="view-more">View 15+ Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            
            <div class="service-card" onclick="openServiceModal('invitations')">
                <div class="service-icon"><i class="fas fa-envelope-open-text"></i></div>
                <img src="uploads/printing/Invitations.jpg" alt="Grand Invitations" class="service-img" onerror="this.src='uploads/Wedding Cards & Grand Invitations/wedding_card1.png'">
                <div class="service-content">
                    <h3>Grand Invitations</h3>
                    <p>Luxurious customized cards, intricate foil stamping, and premium materials for weddings and VIP events.</p>
                    <span class="view-more">View All Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>

        </div>
    </div>

    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeServiceModal()">×</span>
            <div class="modal-header">
                <h2 id="modalTitle">Service Title</h2>
                <p>A complete visual overview of our product offerings in this category.</p>
            </div>
            <div id="modalBody" class="modal-grid">
                </div>
        </div>
    </div>

    <h2 class="section-title">Who We Are</h2>
    <div class="about-wrapper">
        <div class="about-row">
            <div class="about-img"><img src="customers/about-us.png" alt="About Us"></div>
            <div class="about-text">
                <h3>About Us</h3>
                <p>Our team of over 20 people is more than just a talented group of designers, retouchers, packaging experts, Art workers, and print specialists. As industry experts in their respective fields, they offer a unique combination of skills. We have around-the-clock production facilities in Yelahanka delivering world-class products.</p>
            </div>
        </div>
        <div class="about-row reverse">
            <div class="about-img"><img src="customers/group.png" alt="Our Group"></div>
            <div class="about-text">
                <h3>Our Group History</h3>
                <p>Since 2014 (and now celebrating over 12 years of excellence overall), Durga Printers is proudly one of the fastest growing, privately owned Corporate Printing Companies in Bengaluru. Our dedication to quality has allowed us to serve top-tier clients across various industries.</p>
            </div>
        </div>
        <div class="about-row">
            <div class="about-img"><img src="customers/mh.png" alt="Expertise"></div>
            <div class="about-text">
                <h3>Technical Expertise</h3>
                <p>We are at the forefront of print technology, thanks to our group-wide investment in the latest equipment from ABdick, Ryobi, Agfa, Xerox, Konica Minolta, and Roland. Supported by state-of-the-art color management and web-based collateral systems.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title">Valued Customers</h2>
    <div class="grid-container">
        <div class="grid-card"><img src="customers/af.jpg" onerror="this.src='https://ui-avatars.com/api/?name=AF&background=random'"></div>
        <div class="grid-card"><img src="customers/airforce.jpg" onerror="this.src='https://ui-avatars.com/api/?name=IAF&background=random'"></div>
        <div class="grid-card"><img src="customers/Central_Reserve_Police_Force_emblem.png" onerror="this.src='https://ui-avatars.com/api/?name=CRPF&background=random'"></div>
        <div class="grid-card"><img src="customers/railway.png" ></div>
        <div class="grid-card"><img src="customers/ksta.png" ></div>
        <div class="grid-card"><img src="customers/powergrid.png" ></div>
        <div class="grid-card"><img src="customers/icar.png" ></div>
        <div class="grid-card"><img src="customers/icmr.jpg" ></div>
        <div class="grid-card"><img src="customers/ag.jpg" ></div>
        <div class="grid-card"><img src="customers/nivedi.png" ></div>
        <div class="grid-card"><img src="customers/bmscollege.jpeg"></div>
        <div class="grid-card"><img src="customers/smv.png" ></div>
        <div class="grid-card"><img src="customers/manipal.png" ></div>
        <div class="grid-card"><img src="customers/vibgyor.png" ></div>
        <div class="grid-card"><img src="customers/indigo.png"></div>
        <div class="grid-card"><img src="customers/caf.png" ></div>
        <div class="grid-card"><img src="customers/tenneco.png" ></div>
        <div class="grid-card"><img src="customers/otis.png" ></div>
        <div class="grid-card"><img src="customers/kia.png" ></div>
        <div class="grid-card"><img src="customers/aye.png"></div>
        <div class="grid-card"><img src="customers/tafe.png" ></div>
        <div class="grid-card"><img src="customers/hondA.png" ></div>
        <div class="grid-card"><img src="customers/asteria.png" ></div>
        <div class="grid-card"><img src="customers/lubcon.png" ></div>
        <div class="grid-card"><img src="customers/aveksha.png" ></div>
        <div class="grid-card"><img src="customers/sericare.png" ></div>
        <div class="grid-card"><img src="customers/medtech.png" ></div>
        <div class="grid-card"><img src="customers/bas.png" ></div>
        <div class="grid-card"><img src="customers/kidzee.png" ></div>
        <div class="grid-card"><img src="customers/wzatco.png"></div>
        <div class="grid-card"><img src="customers/agroisia.png" ></div>
        <div class="grid-card"><img src="customers/shivas.jpg" ></div>
        <div class="grid-card"><img src="customers/cllub.png" ></div>
        <div class="grid-card"><img src="customers/sfgc.png" ></div>
        <div class="grid-card"><img src="customers/bishop.png" ></div>
        <div class="grid-card"><img src="customers/sps.png"></div>
    </div>

    <footer>
        <div class="footer-brand">
            <h2>Durga Printers</h2>
            <p>For a-z in printing</p>
        </div>
        
        <div class="footer-pills">
            <a href="tel:+919513616667" class="btn-phone"><i class="fas fa-phone-alt"></i> Call +91 95136 16667</a>
            <a href="https://wa.me/919481660707" target="_blank" class="btn-wa"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
            <a href="mailto:durgaprintservices@gmail.com" class="btn-mail"><i class="fas fa-envelope"></i> Email Us</a>
        </div>

        <div class="copyright">
            <p><i class="fas fa-map-marker-alt"></i> #571 MIG, 3rd Main, 4th Cross, 4th Phase, Yelahanka New Town, Bengaluru-560064.</p>
            <p style="margin-top: 15px; color: #555;">© <?php echo date("Y"); ?> Durga Printers. All Rights Reserved.</p>
        </div>
        
        <div class="creator-credit">Created by Prajzo</div>
    </footer>

    <script>
        // --- Header Dropdown ---
        function toggleContact() {
            document.getElementById('contactDropdown').classList.toggle('show');
            const arrow = document.getElementById('contactArrow');
            if (document.getElementById('contactDropdown').classList.contains('show')) {
                arrow.classList.replace('fa-chevron-down', 'fa-chevron-up');
            } else {
                arrow.classList.replace('fa-chevron-up', 'fa-chevron-down');
            }
        }
        window.onclick = function(event) {
            if (!event.target.matches('.contact-btn') && !event.target.closest('.contact-btn')) {
                var dropdowns = document.getElementsByClassName("contact-dropdown");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                        document.getElementById('contactArrow').classList.replace('fa-chevron-up', 'fa-chevron-down');
                    }
                }
            }
            if (event.target == document.getElementById('serviceModal')) {
                closeServiceModal();
            }
        }

        // --- Slider Logic (UPDATED: 5s interval) ---
        let currentSlide = 0;
        const totalSlides = 5;
        const track = document.getElementById('sliderTrack');
        const dots = document.querySelectorAll('.dot');

        function updateSlider() {
            track.style.transform = `translateX(-${currentSlide * 20}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlide].classList.add('active');
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
            resetTimer();
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        let slideTimer = setInterval(nextSlide, 5000);
        function resetTimer() {
            clearInterval(slideTimer);
            slideTimer = setInterval(nextSlide, 5000);
        }

        // --- EXACT MAPPED PRODUCT IMAGES IN uploads/printing/ DIRECTORY ---
        const servicesData = {
            'printing': {
                title: 'Printing Requirements',
                items: [
                    { name: "Bill Books", img: "uploads/printing/billbook.png" },
                    { name: "Voucher Books", img: "uploads/printing/Voucher Books.jpg" },
                    { name: "Letter Heads", img: "uploads/printing/leatterhead.png" },
                    { name: "Business Cards", img: "uploads/printing/BusinessCards.png" },
                    { name: "Brochures", img: "uploads/printing/Brochures.png" },
                    { name: "Pamphlets", img: "uploads/printing/Pamphlets.png" },
                    { name: "Files", img: "uploads/printing/Files.png" },
                    { name: "Envelopes", img: "uploads/printing/Envelopes.png" },
                    { name: "Certificates", img: "uploads/printing/Certificates.png" },
                    { name: "Rubber Stamps", img: "uploads/printing/Rubber Stamps.png" },
                    { name: "Packing Covers", img: "uploads/printing/Packing Covers.png" },
                    { name: "I D Cards", img: "uploads/printing/I D Cards.jpg" },
                    { name: "Swipe Cards", img: "uploads/printing/Swipe Cards.jpg" },
                    { name: "Gift Cards", img: "uploads/printing/Gift Cards.png" },
                    { name: "Printing of God Photos", img: "uploads/printing/Printing of God Photos.png" },
                    { name: "Price Tags", img: "uploads/printing/Price Tags.png" },
                    { name: "Price Lists", img: "uploads/printing/Price Lists.png" },
                    { name: "Gift Vouchers", img: "uploads/printing/Gift Vouchers.png" },
                    { name: "Posters", img: "uploads/printing/Posters.png" },
                    { name: "Big Posters", img: "uploads/printing/Big Posters.png" },
                    { name: "Small Posters", img: "https://images.unsplash.com/photo-1572949645841-094f3a9c4c94?auto=format&fit=crop&w=400&q=80" },
                    { name: "Stickers", img: "https://images.unsplash.com/photo-1572375992501-4b0892d50c69?auto=format&fit=crop&w=400&q=80" },
                    { name: "Product Stickers", img: "https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=400&q=80" },
                    { name: "Bottle Label", img: "uploads/printing/Bottle Label.png" },
                    { name: "Hand Covers", img: "https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&w=400&q=80" },
                    { name: "Embozed Business Cards", img: "https://images.unsplash.com/photo-1589030343991-69ea1433b941?auto=format&fit=crop&w=400&q=80" },
                    { name: "Invitations", img: "uploads/printing/Invitations.png" },
                    { name: "News Paper Printing", img: "https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=400&q=80" },
                    { name: "Photo Printing and Framing", img: "https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=400&q=80" },
                    { name: "Natural Scenery Printing", img: "https://images.unsplash.com/photo-1472214103451-9374bd1c798e?auto=format&fit=crop&w=400&q=80" }
                ]
            },
            'gifts': {
                title: 'Corporate Merchandising',
                items: [
                    { name: "T Shirt Printing", img: "uploads/Corporate/T Shirt Printing.jpg" },
                    { name: "Mug Printing", img: "uploads/Corporate/Mug Printing.jpg" },
                    { name: "Magic Mug Printing", img: "uploads/Corporate/Magic Mug Printing.jpg" },
                    { name: "Mouse Pads", img: "uploads/Corporate/Mouse Pads.jpg" },
                    { name: "Pen Drives", img: "uploads/Corporate/pen drive.jpg" },
                    { name: "Pendrive With Printing", img: "uploads/Corporate/Pen Drivelogos.jpg" },
                    { name: "Smart Card Pendrives", img: "uploads/Corporate/Pendrive With Printing.jpg" },
                    { name: "Sports Wear With Print", img: "uploads/Corporate/Sports Wear With Print.jpg" },
                    { name: "Corporate Bags With Print", img: "uploads/Corporate/Corporate Bags With Print.png" },
                    { name: "Table Tops", img: "uploads/Corporate/Table Tops.png" },
                    { name: "Mobile Flip Covers", img: "uploads/Corporate/Mobile Flip Covers.jpg" },
                    { name: "Mouse Pad With Print", img: "uploads/Corporate/Mouse Pad With Print.png" },
                    { name: "Wall Clock With Print", img: "uploads/Corporate/Wall Clock With Print.jpg" },
                    { name: "Key Chains With Print", img: "uploads/Corporate/Key Chains With Print.jpg" },
                    { name: "Pillows With Print", img: "uploads/Corporate/Pillows With Print.jpg" },
                    { name: "Photo Frames With Print", img: "uploads/Corporate/Photo Frames With Print.jpg" },
                    { name: "Doom Stickers With Print", img: "https://images.unsplash.com/photo-1500051638674-ff996a0ec29e?auto=format&fit=crop&w=400&q=80" },
                    { name: "School Bag With Print", img: "uploads/Corporate/School Bag With Print.jpg" },
                    { name: "Table Calenders", img: "uploads/Corporate/Table Calenders.jpg" },
                    { name: "Calenders", img: "uploads/Corporate/calender.jpg" },
                    { name: "Mini Calenders", img: "uploads/Corporate/Mini Calenders.jpg" }
                ]
            },
            'signage': {
                title: 'Display & Signage Media',
                items: [
                    { name: "Led Acrlyic Signages", img: "uploads/Display & Signage Media/Led Acrlyic Signages.jpg" },
                    { name: "Back Lit Boards", img: "uploads/Display & Signage Media/Back Lit Boards.jpg" },
                    { name: "L E D Light Boards", img: "uploads/Display & Signage Media/L E D Light Boards.jpg" },
                    { name: "Signboards", img: "uploads/Display & Signage Media/Signboards.jpg" },
                    { name: "Brass Boards", img: "uploads/Display & Signage Media/Brass Boards.jpg" },
                    { name: "Vinyl Printing", img: "uploads/Display & Signage Media/Vinyl Printing.jpg" },
                    { name: "Vinyl Pasting", img: "uploads/Display & Signage Media/Vinyl Pasting.jpg" },
                    { name: "One Vision Printing", img: "uploads/Display & Signage Media/One Vision Printing.jpg" },
                    { name: "Stainless Steel Boards", img: "uploads/Display & Signage Media/Stainless Steel Boards.jpg" },
                    { name: "Brass Name Plate", img: "uploads/Display & Signage Media/Brass Name Plate.jpg" },
                    { name: "Umbrella Ads", img: "uploads/Display & Signage Media/Umbrella Ads.jpg" },
                    { name: "Umbrella with table", img: "uploads/Display & Signage Media/Umbrella with table.jpg" },
                    { name: "Canopies", img: "uploads/Display & Signage Media/Canopies.jpg" },
                    { name: "Large Format (A0) Printing", img: "uploads/Display & Signage Media/Large Format (A0) Printing_files.jpg" },
                    { name: "Indoor Ads", img: "uploads/Display & Signage Media/Indoor Ads.jpg" }
                ]
            },
            'invitations': {
                title: 'Wedding Cards & Grand Invitations',
                items: [
                    { name: "VIP Cards", img: "uploads/Wedding Cards & Grand Invitations/VIP Cards.jpg" },
                    { name: "Corporate Invitations", img: "uploads/Wedding Cards & Grand Invitations/Corporate Invitations.jpg" },
                    { name: "Customized Birthday Cards", img: "uploads/Wedding Cards & Grand Invitations/Customized Birthday Cards.jpg" },
                    { name: "House Warming Cards", img: "uploads/Wedding Cards & Grand Invitations/House Warming Cards.jpg" },
                    { name: "Customized Invitations", img: "uploads/Wedding Cards & Grand Invitations/Customized Invitations.jpg" },
                    { name: "Customized Wedding Cards", img: "uploads/Wedding Cards & Grand Invitations/Customized Wedding Cards.jpg" }
                ]
            }
        };

        const modal = document.getElementById('serviceModal');
        const modalBody = document.getElementById('modalBody');

        function openServiceModal(category) {
            const data = servicesData[category];
            document.getElementById('modalTitle').innerText = data.title;
            
            let gridHtml = '';
            
            data.items.forEach(item => {
                gridHtml += `
                    <div class="modal-item">
                        <img src="${item.img}" alt="${item.name}" onerror="this.src='https://via.placeholder.com/300x200?text=No+Image'" loading="lazy">
                        <h4>${item.name}</h4>
                    </div>
                `;
            });
            
            modalBody.innerHTML = gridHtml;
            modal.style.display = 'flex';
        }

        function closeServiceModal() {
            modal.style.display = 'none';
        }
    </script>
</body>
</html>