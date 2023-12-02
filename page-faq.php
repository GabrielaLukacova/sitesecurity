<?php
/*
Template Name: FAQ
*/
?>

<main>

<?php get_header() ?>


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



<section class=faq>

<h2>Heading</h2>

<div class="faq-container">
  <div class="faq-column">
    <div class="faq-box">
      <div class="question">
        Question 1?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 1.
      </div>
    </div>

    <div class="faq-box">
      <div class="question">
        Question 1?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 1.
      </div>
    </div>

    <div class="faq-box">
      <div class="question">
        Question 1?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 1.
      </div>
    </div>

    <div class="faq-box">
      <div class="question">
        Question 1?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 1.
      </div>
    </div>
    

    
  </div>

  <div class="faq-column">
    <div class="faq-box">
      <div class="question">
        Question 2?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 2.
      </div>
    </div>


    <div class="faq-box">
      <div class="question">
        Question 2?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 2.
      </div>
    </div>


    <div class="faq-box">
      <div class="question">
        Question 2?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 2.
      </div>
    </div>

    <div class="faq-box">
      <div class="question">
        Question 2?
        <div class="arrow">&#9658;</div>
      </div>
      <div class="answer">
        Answer to Question 2.
      </div>
    </div>

    
  </div>
</div>

</section>




<section class=faq>
<h2>Heading</h2>
    <div class="security_possibilities_container">
         <?php $loop = new WP_Query( array( 'post_type' => 'security_possibility', 'posts_per_page' => -1 ) ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('security_possibility_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
                <div class="faq-container">
                    <div class="faq-column">
                      <div class="faq-box">    
                            <div class="question">
                                Question 2?
                                <div class="arrow">&#9658;
                                </div>
                            </div>
                            <div class="answer">
                                Answer to Question 2.
                            </div>
                      </div>
                    </div>
                </div>
            </div>
    </div>
            <?php endwhile; wp_reset_query(); ?>
</section>





<section class=faq>
<h2 class="heading-above"><?php echo get_field("fqa_main_article_title"); ?></h2>
    <div class="security_possibilities_container">
         <?php $loop = new WP_Query( array( 'post_type' => 'security_possibility', 'posts_per_page' => -1 ) ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="security_possibilities_container_box" style="background-image: <?php $image = get_field('security_possibility_image'); ?> url('<?php echo esc_url($image["url"]); ?>'); background-size: cover; background-position: center; height: auto;">
                <div class="faq-container">
                    <div class="faq-column">
                      <div class="faq-box">    
                            <div class="question">
                                Question 2?
                                <div class="arrow">&#9658;
                                </div>
                            </div>
                            <div class="answer">
                                Answer to Question 2.
                            </div>
                      </div>
                    </div>
                </div>
            </div>
    </div>
            <?php endwhile; wp_reset_query(); ?>
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






</body>
<?php endwhile ?>
</main>
<?php get_footer() ?>