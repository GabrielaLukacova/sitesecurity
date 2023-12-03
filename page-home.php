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
<!-- Article Section -->

<article class="article_main">
        <h2>Solar farm security integration</h2>
        <p class="article-text"><?php the_field('article');?></p>
        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_yellow">Our products and servides</a>
</article>

<!--- One color line seperator yellow --->

<div class="line-seperator-1" style="background-color: #FFC826; height: 40px;"></div>


<!-- Advantages Section -->
<section class="advantages_main" style="background-image: <?php $image = get_field('advantages_right_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
<h2 class="heading-above">
    <span class="gray-text">ADVANTAGES <br> TO CHOOSE </span>
    <span class="yellow-text">US</span>
</h2>
    <!--  <div class="advantagess_main_content_and_image" > -->

        <?php $loop = new WP_Query( array( 'post_type' => 'advantage', 'posts_per_page' => -1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="advantages_main_content">
                    <div class="advantages-box-content" style="">
                        
                        <div style="background-image: <?php $image = get_field('advantages_small_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-position: auto; background-repeat: no-repeat; width: 80px; height: 80px;" ></div>  
                        <p style="margin-right: 30px;" ><?php echo get_field("advantages_text"); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    

    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="button_grey">Read more</a> 
 </section>

<!--- One color line seperator white --->

<div class="line-seperator-1" style="background-color: #fff; height: 40px;"></div>


<!--- Contact form section --->

<section class="contact-form-container" style="background-image: <?php $image = get_field('contact-form-image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">
    <h4 class="contact-form-heading"><?php the_field('contact_form_heading'); ?></h4>
    <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="2e0ef46" title="Secure your business"]' ); ?>
    </div>
</section>



<!--- One color line seperator dark gray --->

<div class="line-seperator-1" style="background-color: #424146; height: 40px;"></div>



<!--- Security possibilities section --->

<section class="security_possibilities"> 
    <h2 class="heading-above"><?php echo get_field("security_possibilities_heading"); ?></h2>
    <div class="security_possibilities_container">
        <?php $loop = new WP_Query( array( 'post_type' => 'security_possibility', 'posts_per_page' => -1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('security_possibility_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
                <div class="security_possibilities_container_box-content">
                    <div class="box-content">
                        <h3 class="heading_white" style="background-color: rgba(51, 51, 51, 0.7); font-size: 18px; padding: 10px 10px;"><?php echo get_field("security_possibility_heading"); ?></h3>
                        <p class="article-text heading_white" style="background-color: rgba(51, 51, 51, 0.7); color: #fff; font-size: 18px; margin: 0 auto; padding: 10px 10px;"><?php echo get_field("security_possibility_description"); ?></p>
                        <a href="https://www.sitesecurity.dk/en/loesninger" class="button_yellow">Read more</a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <a href="https://www.sitesecurity.dk/en/loesninger" class="button_grey">More security ideas</a> 
</section>

</body>
<?php endwhile ?>
</main>
<?php get_footer() ?>