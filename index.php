<?php get_header() ?>


    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

<?php get_footer() ?>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#services">Services</a>
  <a href="#faq">FAQ</a>
  <a href="#contacts">Contacts</a>
</div>

