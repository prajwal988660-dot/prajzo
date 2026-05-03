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
        // --- Header Dropdown Logic (Needed on all pages) ---
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
                        if(document.getElementById('contactArrow')) {
                            document.getElementById('contactArrow').classList.replace('fa-chevron-up', 'fa-chevron-down');
                        }
                    }
                }
            }
        }
    </script>
</body>
</html>