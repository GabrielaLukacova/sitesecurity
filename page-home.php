<?php
/*
Template Name: Home
*/
?>

<?php get_header() ?>
<main>

    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
  


<body>


<div class="navbar">
    <div class="column links">
        <a href="<?php echo get_permalink( get_page_by_path( 'home' ) ) ?>">Home</a>
    </div>
  <div>
    <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">Contacts</a>
    <a href="<?php echo get_permalink( get_page_by_path( 'faq' ) ) ?>">FAQ</a>
    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>">Services</a>
    </div>
</div>




<div class="hero-section">
    <?php $image = get_field('hero_video'); ?>
    <div class="image-container" style="background-image: url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">
        <!-- Empty div for styling purposes, no need for an actual image element here -->
    </div>
    <div class="hero-content">
        <h1>Heading</h1>
        <p>Slogan.</p>
    </div>
</div>






<div class="contact-form-container">
    <div class="image-container">
        <?php $image = get_field ("contact-form-image"); ?> 
        <img src="<?php echo $image["url"] ?>" alt="Image">
    </div>
    <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="2e0ef46" title="Secure your busines"]' ) ;?>
      </div>
</div>





<footer>
        <div class="column links">
            <a href="<?php echo get_permalink( get_page_by_path( 'home' ) ) ?>">Home</a>
            <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>">Services</a>
            <a href="<?php echo get_permalink( get_page_by_path( 'faq' ) ) ?>">FAQ</a>
            <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact</a>
        </div>

        <div class="column image">
            <img src="....." alt="Logo">
        </div>

        <div class="column contact-info">
                <div class= "footer_call_mail">
                    <i class="material-icons">call</i>            
                    <p> +45 88 80 84 48</p>
            </div>
                <div class= "footer_call_mail">
                    <i class="material-icons">mail</i>   
                    <p>danmark@sitesecurity.dk</p>
            </div>
            <div>
                <a href="https://www.facebook.com/aktivovervaagning/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/facebook.png" alt="Facebook" width="50" height="50">
                </a>

                <a href="https://www.linkedin.com/company/sitesecurity/" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" width="50" height="50">
                </a>
            </div>
        </div>
    </footer>

</body>
<?php endwhile ?>
</main>
<?php get_footer() ?>