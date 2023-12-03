<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>

        <!-- Hero Section with navbar -->
        <div class="hero-section" style="background-image: url('<?php echo esc_url(get_field('hero_video')['url']); ?>'); background-size: cover; background-position: center; height: 100vh;">
            <div class="navbar">
                <a class="home" href="<?php echo esc_url(get_permalink(get_page_by_path('home'))); ?>" style="order: -1;">Home</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">Contacts</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>">FAQ</a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">Services</a>
            </div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-text"><?php the_field('hero_text'); ?></h1>
            <p class="hero-slogan"><?php the_field('hero_slogan'); ?></p>
        </div>

        <!-- FAQ Section -->
        <section class="faq">
            <h2 class="heading-above"><?php echo get_field("fqa_main_article_title"); ?></h2>
            <div class="faq_container">
                <?php $loop = new WP_Query(array('post_type' => 'question-and-answer', 'posts_per_page' => -1)); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="faq_container_box">
                        <div class="faq-container_2">
                            <div class="faq-column">
                                <div class="faq-box">
                                    <div class="question">
                                        <p><?php echo get_field("question_text"); ?></p>
                                        <div class="arrow">&#9658;</div>
                                    </div>
                                    <div class="answer">
                                        <p><?php echo get_field("answer_text"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_query(); ?>
            </div>
        </section>

        <!-- FAQ Call to Action Section -->
        <section class="faq_call_to_action">
            <h3><?php echo get_field("more_questions_heading"); ?></h3>
            <div class="faq_call_to_action_boxes">
                <div class="faq_call_to_action_box">
                    <p><?php echo get_field("more_questions_text_1"); ?></p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="button_yellow">Services</a>
                </div>
                <div class="faq_call_to_action_box">
                    <p><?php echo get_field("more_questions_text_2"); ?></p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button_yellow">Contact</a>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<script src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/script.js"></script>

<?php get_footer(); ?>
