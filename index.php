<?php include 'header.php'; ?>

    <div class="slider-wrapper">
        <div class="slider-track" id="sliderTrack">
            <div class="slide active" style="background-image: url('banners/main.png');"></div>
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
            
            <div class="service-card" onclick="window.location.href='printing'">
                <div class="service-icon"><i class="fas fa-print"></i></div>
                <img src="uploads/printing/Brochures.jpg" alt="Commercial Printing" class="service-img" onerror="this.src='uploads/printing/Printing1.png'">
                <div class="service-content">
                    <h3>Paper & Print Media</h3>
                    <p>Complete catalog of commercial bill books, premium business cards, brochures, and daily office stationery.</p>
                    <span class="view-more">View 30+ Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            
            <div class="service-card" onclick="window.location.href='gifts'">
                <div class="service-icon"><i class="fas fa-gift"></i></div>
                <img src="uploads/printing/Gift Cards.jpg" alt="Corporate Merch" class="service-img" onerror="this.src='uploads/printing/Corporate1.png'">
                <div class="service-content">
                    <h3>Corporate Merch</h3>
                    <p>Customized branded apparel, premium drinkware, tech accessories, and executive corporate gifting solutions.</p>
                    <span class="view-more">View 20+ Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            
            <div class="service-card" onclick="window.location.href='signage'">
                <div class="service-icon"><i class="fas fa-sign"></i></div>
                <img src="uploads/printing/Big Posters.jpg" alt="Display Signages" class="service-img" onerror="this.src='uploads/Display & Signage Media/Display & Signage Media.png'">
                <div class="service-content">
                    <h3>Display Signages</h3>
                    <p>High-visibility LED boards, large format vinyl wrapping, outdoor canopies, and architectural metal signage.</p>
                    <span class="view-more">View 15+ Products <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            
            <div class="service-card" onclick="window.location.href='invitations'">
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

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function updateSlider() {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            slides[currentSlide].classList.add('active');
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
    </script>

<?php include 'footer.php'; ?>