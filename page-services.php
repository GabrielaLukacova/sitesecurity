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



<section class="services_to_meet_needs">
        <img src="your-image.jpg" alt="Background Image">
        <div class="services_to_meet_needs_center-content">
            <h2>Your Heading</h2>
        </div>
</section>



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



 <section class="customer-reviews">
        <div class="review-header">
            <h2>What our customers say</h2>
        </div>
        <div class="review-container">
            <div class="slick-carousel">

                <!-- First Review -->
                <div class="review-item">
                    <div class="background-image">
                        <div class="center-content">
                            <img src="company-logo1.png" alt="Company Logo 1">
                            <div class="review-box">
                                <h3>Company Name 1</h3>
                                <p>"What customers said about our services. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                                <p class="author-info">- John Doe, CEO, Company XYZ</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Review -->
                <div class="review-item">
                    <div class="background-image">
                        <div class="center-content">
                            <img src="company-logo2.png" alt="Company Logo 2">
                            <div class="review-box">
                                <h3>Company Name 2</h3>
                                <p>"Another customer testimonial. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                                <p class="author-info">- Jane Smith, COO, Company ABC</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <section class="call_to_action_more_info">
        <div class="call_to_action_more_info_left">
            <h3>Your Heading</h3>
        </div>
        <div class="call_to_action_more_info_right">
        <a href="<?php echo get_permalink( get_page_by_path( 'https://www.sitesecurity.dk/' ) ) ?>" class="button_yellow">Site Security</a>
        </div>
    </section>


    
    <?php endwhile ?>
</main>
<?php get_footer() ?>