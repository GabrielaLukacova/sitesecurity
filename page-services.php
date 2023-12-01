<?php
/*
Template Name: Services
*/
?>


<?php get_header() ?>
<main>
    
    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    


<body>


<!-- Hero Section with navbar -->

<div class="hero-section"   style="background-image: <?php $image = get_field('hero_video'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">
        <div class="navbar">
            <a class="home" href="<?php echo get_permalink(get_page_by_path('home')) ?>" style="order: -1;">Home</a>
            <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">Contacts</a>
            <a href="<?php echo get_permalink(get_page_by_path('faq')) ?>">FAQ</a>
            <a href="<?php echo get_permalink(get_page_by_path('services')) ?>">Services</a>
        </div>

    </div>
    <div class="hero-content">
        <h1 class="hero-text"><?php the_field('hero_text'); ?></h1>
        <p class="hero-slogan"><?php the_field('hero_slogan'); ?></p>
    </div>
</div>



<div class="call_to_action_contact_us">
    <div class="yellow_box"></div>
    <div class="call_to_action_contact_us_content">
        <div class="call_to_action_contact_us_content_text">
            <h1>We can help you with personalized recommendations!</h1>
            <p>Contact us by phone or send contact form to get personalized consultation for your own business situation.</p>
            <a href="#" class="button">Contact us</a>
        </div>
        <div class="call_to_action_contact_us_content_image">
            <img src="your-image.jpg" alt="Your Image" class="image-container">
        </div>
    </div>
 </div>


    <?php endwhile ?>
</main>
<?php get_footer() ?>