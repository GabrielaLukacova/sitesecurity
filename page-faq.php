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

</body>
<?php endwhile ?>
</main>
<?php get_footer() ?>