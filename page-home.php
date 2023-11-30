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

<!-- Navigation bar Section -->

<div class="navbar">
    <div class="column links">
        <a class="home" href="<?php echo get_permalink(get_page_by_path('home')) ?>">Home</a>
        <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">Contacts</a>
        <a href="<?php echo get_permalink(get_page_by_path('faq')) ?>">FAQ</a>
        <a href="<?php echo get_permalink(get_page_by_path('services')) ?>">Services</a>
    </div>   
</div>




<!-- Hero Section -->

<div class="hero-section">
    <?php $image = get_field('hero_video'); ?>
    <div class="image-container" style="background-image: url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">
    </div>
    <div class="hero-content">
        <h1 class="hero-text"><?php the_field('hero_text'); ?></h1>
        <p class="hero-slogan"><?php the_field('hero_slogan'); ?></p>
    </div>
</div>

<!-- Article Section -->

<div class="article_main">
        <h2>Article title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur. adipiscing elit. Sed tincidunt velit nec mauriscursus, id venenatis justo convallis. Fusce vusto nec felis efficitur laoreet. Quisque velest id elit varius eleifend. Sed ac justo id nisi elementum fermentum. Praesent nec ultrices ex, vel bibendum justo. Curabitur tinciduntLorem ipsum dolor sit amet, consecteturadipiscing elit. Sed tincidunt velit nec mauriscursus, id venenatis justo convallis. Fusce velusto nec felis efficitur laoreet. Quisque veest id elit varius eleifend. Sed ac justo id nisielementum fermentum. Praesent nec ultricesex, vel bibendum justo. 
        </p>
        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Our products and servides</a>
        <img src="....." alt=""> 
    </div>



 <div class="advantisages_main">
    <h2>ADVANTAGES TO CHOOSE US</h2>
     <div class="advantisages_main_content_and_image" > 
        <div class="advantisages_main_content">
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
            <img src="...." alt="">
            <p>Theft prevention.</p>
        </div>
        <div class="advantisages_main_image">
            <img src="...." alt=""> 
        </div>
    </div>

<a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_grey">Read more</a> 
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