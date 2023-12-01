<?php
/*
Template Name: FAQ
*/
?>


<?php get_header() ?>


    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

<?php get_footer() ?>


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


<section> 
    <?php $loop = new WP_Query( array( 'post_type' => 'property', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="pindex">
        <div class="pimage">
            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
        </div>
        <div class="ptitle">
            <h2><?php echo get_the_title(); ?></h2>
        </div>
    </div>
    <?php endwhile; wp_reset_query(); ?>
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