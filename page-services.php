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


<!-- One color line seperator blue -->

<div class="line-seperator-1" style="background-color: #AABFDF; height: 40px;"></div>


<!-- Services to meet you needs Section -->

<section class="services_to_meet_needs" style="background-image: <?php $image = get_field('services_bg_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 320px; background-color: #AABFDF">
    <?php $image = get_field ("services_bg_image"); ?> 
    <img src="<?php echo $image["url"] ?>" alt="Image"> 

    <div class="article_with_img">

        <div class="services_to_meet_needs_center-content" style="font-size: 40px; font-weight: 300; color: #fff;">
            <h2 class="heading_white"><?php echo get_field("services_main_title"); ?></h2>
        </div>
    </div>
</section>

<!-- Services LOOP Section -->

<section class="services_and_products_main"> 
    <div class="security_possibilities_container">
        <?php $loop = new WP_Query( array( 'post_type' => 'question-and-answer', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('product_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto; background-color: #F6F6F6;">
                    <div class="security_possibilities_container_box-content">
                    <div class="box-content">
                        <h3 class="heading_white" style="background-color: rgba(51, 51, 51, 0.7); font-size: 18px; padding: 10px 10px;"><?php echo get_field("product_heading"); ?></h3>
                        <p class=" article-text heading_white" style="  background-color: rgba(51, 51, 51, 0.7); color: #fff; font-size: 18px; margin: 0 auto; padding: 10px 10px;">
                        <?php echo get_field("product_description"); ?></p>
                        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <a href="https://www.sitesecurity.dk/en/loesninger" class="button_grey">More security ideas</a> 

 </section>

<!-- Contact Us - Calling to action Section -->

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



<!-- Custumer rewies Section -->

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