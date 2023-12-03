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
            <a href="<?php echo get_permalink(get_page_by_path('services')) ?>">Services</a>
            <a href="<?php echo get_permalink(get_page_by_path('faq')) ?>">FAQ</a>
            <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">Contacts</a>
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

    <div class="article_with_img">

        <div class="services_to_meet_needs_center-content" style="font-size: 40px; font-weight: 300; color: #fff;">
            <h2 class="heading_white"><?php echo get_field("services_main_title"); ?></h2>
        </div>
    </div>
</section>

<!-- Services LOOP Section -->

<section class="services_and_products_main"> 
    <div class="security_possibilities_container">
        <?php $loop = new WP_Query( array( 'post_type' => 'productservice', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('product_image'); ?> url('<?php echo esc_url($image["url"]); ?>');     background-position: 10%; background-repeat: no-repeat; height: auto; background-color: #fff;">
                <div class="security_possibilities_container_box-content">
                    <div class="box-content" style="text-align: right; width: 60%; color: #363636">
                        <h3 class="heading_white" style=" background-color: rgba(51, 51, 51, 0.7); font-size: 24px; padding: 10px 10px;"><?php echo get_field("product_heading"); ?></h3>
                        <p class=" article-text heading_white" style=" text-align: right; background-color: rgba(51, 51, 51, 0.7); color: #fff; font-size: 18px; margin: 0 auto; padding: 10px 10px;">
                        <?php echo get_field("product_description"); ?></p>
                    </div>
                    <div style="">
                    <a href="https://www.sitesecurity.dk/en/modelprogram" class="button_yellow">Read more</a>

                    </div>

                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <a href="https://www.sitesecurity.dk/en/loesninger" class="button_grey ">More security ideas</a> 

 </section>

 <!--- One color line seperator yellow --->
<div class="line-seperator-1" style="background-color: #FFC826; height: 40px;"></div>

<!-- Contact Us - Calling to action Section -->

<section id="article_with_image_call_us" style="background-image: <?php $image = get_field('contact_us_right_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: auto; height: 500px; background-color: #F6F6F6;   color:#363636;">
    <div class="article_with_img" style="width: 85%; ">
        <div class="height_div_for_articles call_us_article" style="width: 70%; " > 
            <h3 class="optima" style="font-size: 40px; margin: 10px;"><?php the_field('contact_us_title'); ?></h3>   
            <p style="font-size: 24px; margin: 10px"><?php the_field('contact_us_article'); ?></p>   
            <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>" class="button_yellow contact_btn">Contact</a>   
        </div>
    </div>
</section> 


<!-- Custumer rewies Section -->

<section class="customer-reviews_main">

<h6 class="heading-above" style="padding: 20px 0 0 0; background-color: #424146; height: 70px; color: white; font-weight: 300;" ><?php echo get_field("what_our_customers_say_heading"); ?></h6>
<section class="customer-reviews" style="background-image: <?php $image = get_field('what_our_customers_say_bg_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">   
<!--  <div class="review-header"> -->
<!--  </div> -->
        <?php $loop = new WP_Query( array( 'post_type' => 'what-our-customers-s', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="review-container">
        <div class="slick-carousel">
            
            <!-- First Review -->
            <div class="review-item">
                <div class="background-image">
                        <div class="center-content">
                            <div class="client_logo">
                                <?php $image = get_field ("client_company_logo"); ?> <img src="<?php echo $image["url"] ?>" alt="client_logo_img_reviews"> 
                            </div>
                            <div class="review-box">
                            <h3><?php echo get_field("client_company_title"); ?></h3>
                                <p class="article-text"><?php echo get_field("description"); ?></p>
                                <p class="author-info"><?php echo get_field("name_of_speaker"); ?></p>
                            </div>
                        </div>
                    
                </div>

            </div>
        </div>

    </div>
    <?php endwhile; wp_reset_query(); ?>
    <a href="https://www.sitesecurity.dk/en/anbefaling" class="button_grey button_grey_more_reviews ">More reviews on Site-Security website</a> 
</section>
</section>

<!-- More info on main website Section -->

    <section class="call_to_action_more_info" style="background-color: #424146;">
        <div class="call_to_action_more_info_left">
            <h3 style="color: white; font-weight: 200;" ><?php echo get_field("go_to_website_title"); ?></h3>
        </div>
        <div class="call_to_action_more_info_right">
        <a href="<?php echo get_permalink( get_page_by_path( 'https://www.sitesecurity.dk/' ) ) ?>" class="button_yellow">Site Security</a>
        </div>
    </section>


    <script src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/script.js"></script>
    
    <?php endwhile ?>

    <!--- One color line seperator yellow --->

<div class="line-seperator-1" style="background-color: #AABFDF; height: 40px;"></div>
</main>
<?php get_footer() ?>
</body>