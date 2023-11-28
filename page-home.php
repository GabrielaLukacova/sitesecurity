<?php get_header() ?>


    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

<?php get_footer() ?>


<body>


<div class="navbar">
    <div class="home">
        <a href="#home">Home</a>
    </div>
  <div>
    <a href="#contacts">Contacts</a>
    <a href="#faq">FAQ</a>
    <a href="#services">Services</a>
    </div>
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
            <a href="">Home</a>
            <a href="#">Services</a>
            <a href="#">FAQ</a>
            <a href="">Contact</a>
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
                    <img src="images/facebook.png" alt="Facebook" width="50" height="50">
                </a>

                <a href="https://www.linkedin.com/company/sitesecurity/" target="_blank">
                    <img src="images/linkedin.png" alt="LinkedIn" width="50" height="50">
                </a>
            </div>
        </div>
    </footer>

</body>
