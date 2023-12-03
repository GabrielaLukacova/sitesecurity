<footer>
    <div class="column links">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('home'))); ?>">Home</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">Services</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>">FAQ</a>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">Contact</a>
    </div>

    <div class="column image">
        <a href="https://www.sitesecurity.dk/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/images/SiteSecurityLogo.png" alt="Logo" width="100" height="150">
        </a>
    </div>

    <div class="column contact-info">
        <div class="footer_call_mail">
            <span class="material-icons" aria-hidden="true">call</span>
            <p>+45 88 80 84 48</p>
        </div>
        <div class="footer_call_mail">
            <span class="material-icons" aria-hidden="true">mail</span>
            <p>danmark@sitesecurity.dk</p>
        </div>
        <div class="social-icons-container">
            <a href="https://www.facebook.com/aktivovervaagning/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/images/facebook.png" alt="Facebook" width="50" height="50">
            </a>

            <a href="https://www.linkedin.com/company/sitesecurity/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/images/linkedin.png" alt="LinkedIn" width="50" height="50">
            </a>
        </div>

    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
