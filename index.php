<?php get_header() ?>


    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

<?php get_footer() ?>


<body>


<!-- Navigation bar Section -->

<div class="navbar">
    <a class="home" href="<?php echo get_permalink(get_page_by_path('home')) ?>" style="order: -1;">Home</a>
    <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">Contacts</a>
    <a href="<?php echo get_permalink(get_page_by_path('faq')) ?>">FAQ</a>
    <a href="<?php echo get_permalink(get_page_by_path('services')) ?>">Services</a>
</div>




<div class="contact-form-container">
    <div class="image-container">
        <?php $image = get_field ("contact-form-image"); ?> 
        <img src="<?php echo $image["url"] ?>" alt="Image">
    </div>
    <div class="contact-form">


<?php echo do_shortcode( '[contact-form-7 id="2e0ef46" title="Secure your busines"]' ) ;?>
      </div>
</div>





<footer>
        <div class="column links">
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">FAQ</a>
            <a href="#">Contact</a>
        </div>

        <div class="column image">
            <img src="images/form-image" alt="Logo">
        </div>

        <div class="column contact-info">
            <div>
                <i class="material-icons">call</i>            
                <p> +45 88 80 84 48</p>
            </div>
            <div>
                <i class="material-icons">mail</i>   
                <p>danmark@sitesecurity.dk</p>
            </div>
            <div>
                
            </div>
        </div>
    </footer>

</body>
