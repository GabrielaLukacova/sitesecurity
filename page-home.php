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

<!-- Article Section -->

<article class="article_main">
        <h2>Solar farm security integration</h2>
        <p class="article-text"><?php the_field('article');?></p>
        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Our products and servides</a>
</article>



 <section class="advantisages_main">
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

 <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_grey">Read more</a> 
</div>

    </section>






<section class="contact-form-container">
    <div class="image-container">
        <?php $image = get_field ("contact-form-image"); ?> 
        <img src="<?php echo $image["url"] ?>" alt="Image">
    </div>
    <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="2e0ef46" title="Secure your busines"]' ) ;?>
      </div>
</section>
  
<section class="security_possibilities"> 
<h5 class="heading-above"><?php echo get_field("security_possibilities_heading"); ?></h5>
    <?php $loop = new WP_Query( array( 'post_type' => 'security_possibility', 'posts_per_page' => -1 ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="security_possibilities_container">
        <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('security_possibility_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
                <div class="security_possibilities_container_box-content">
                <div class="box-content">
                    <h6 class="heading_white"><?php echo get_field("security_possibility_heading"); ?></h6>
                    <p class="article_main heading_white"><?php echo get_field("security_possibility_description"); ?></p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                </div>
            </div>
        </div>
        </div>
    <?php endwhile; wp_reset_query(); ?>
 </section>



<section class="security_possibilities">
    <h5 class="heading-above">A LOT OF SECURITY POSSIBILITIES</h5>
        <div class="security_possibilities_container">
            <div class="security_possibilities_container_box">
                <img src="your_image_url_1.jpg" alt="Image 1">
                <div class="box-content">
                    <h2>Box 1 Heading</h2>
                    <p>Description for Box 1.</p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                </div>
            </div>
            <div class="security_possibilities_container_box">
                <img src="your_image_url_2.jpg" alt="Image 2">
                <div class="security_possibilities_container_box-content">
                    <h2>Box 2 Heading</h2>
                    <p>Description for Box 2.</p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                </div>
            </div>
            <div class="security_possibilities_container_box">
                <img src="your_image_url_3.jpg" alt="Image 3">
                <div class="security_possibilities_container_box-content">
                    <h2>Box 3 Heading</h2>
                    <p>Description for Box 3.</p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                </div>
            </div>
            <div class="security_possibilities_container_box">
                <img src="your_image_url_4.jpg" alt="Image 4">
                <div class="security_possibilities_container_box-content">
                    <h2>Box 4 Heading</h2>
                    <p>Description for Box 4.</p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                </div>
            </div>
        </div>
        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_grey">more</a> 
</section>




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