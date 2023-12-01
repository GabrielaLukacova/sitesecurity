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



<!-- Advantages Section -->
<section class="advantages_main" style="background-image: <?php $image = get_field('advantages_right_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
<h3 class="heading-above">ADVANTAGES TO CHOOSE US</h3>
    <!--  <div class="advantagess_main_content_and_image" > -->

        <?php $loop = new WP_Query( array( 'post_type' => 'advantage', 'posts_per_page' => -1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="advantages_main_content">
                    <div class="advantages-box-content" style="background-image: <?php $image = get_field('advantages_small_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto; ">
                        <p 
                        ><?php echo get_field("advantages_text"); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    

    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_grey">Read more</a> 
 </section>

i
 <section class="advantages_main">
    <h2>ADVANTAGES TO CHOOSE US</h2>
     <div class="advantagess_main_content_and_image" > 
        <div class="advantages_main_content">
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
        <div class="advantages_main_image">
            <img src="...." alt=""> 
        </div>


 <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_grey">Read more</a> 
</div>

    </section>






<section class="contact-form-container"  style="background-image: <?php $image = get_field('contact-form-image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">
    <h4>Unique way to secure your business!</h4>
    <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="2e0ef46" title="Secure your busines"]' ) ;?>
      </div>
</section>
  
<section class="security_possibilities"> 
<h5 class="heading-above"><?php echo get_field("security_possibilities_heading"); ?></h5>
    <div class="security_possibilities_container">
        <?php $loop = new WP_Query( array( 'post_type' => 'security_possibility', 'posts_per_page' => -1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('security_possibility_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
                    <div class="security_possibilities_container_box-content">
                    <div class="box-content">
                        <h6 class="heading_white" style="background-color: rgba(51, 51, 51, 0.7); font-size: 18px; padding: 10px 10px;"><?php echo get_field("security_possibility_heading"); ?></h6>
                        <p class=" article-text heading_white" style="  background-color: rgba(51, 51, 51, 0.7); color: #fff; font-size: 18px; margin: 0 auto; padding: 10px 10px;"><?php echo get_field("security_possibility_description"); ?></p>
                        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Read more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <a href="<?php echo get_permalink( get_page_by_path( '.........' ) ) ?>" class="button_grey">More security ideas</a> 

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