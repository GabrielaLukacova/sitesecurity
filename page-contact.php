<?php
/*
Template Name: Contact
*/
?>

<?php get_header() ?>
    
    <?php while(have_posts()): the_post() ?>
  
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

<section id="phone and e-mail">
    <div class="phone_and_email "> 
        <div class="footer_call_mail2 footer_call_mail">
            <div style="font-size: 30px; color: #FCD53F; width: 100px; display: flex; align-items: center;">
                <span class="material-icons" aria-hidden="true">call</span>
                <p>Phone</p>
            </div> 
            <p><?php the_field('phone'); ?></p>
        </div>

        <div class="footer_call_mail2 footer_call_mail">
            <div style="font-size: 30px; color: #FCD53F; width: 100px; display: flex; align-items: center;">
                <span class="material-icons" style="color: #FCD53F;" aria-hidden="true">mail</span>
                <p>E-mail</p>
            </div> 
            <p><?php the_field('email'); ?></p>   
        </div>
    </div>

</section>







<!--- Contact form section --->

<section class="contact-form-container" style="background-image: <?php $image = get_field('contact-form-image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: 100vh;">
    <h4 class="contact-form-heading"><?php the_field('form_heading'); ?></h4>
    <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="2e0ef46" title="Secure your business"]' ); ?>
    </div>
</section>








<section class="security_possibilities"> 
<h6 class="heading-above"><?php echo get_field("a_lot_of_security_possibilities"); ?></h6>
    <div class="security_possibilities_container">
        <?php $loop = new WP_Query( array( 'post_type' => 'security_possibility', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
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

</body>
<?php endwhile ?>
</main>
<?php get_footer() ?>