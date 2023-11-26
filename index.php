<?php get_header() ?>


    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>

<?php get_footer() ?>


<body>


<div class="navbar">
  <a href="#home">Home</a>
  <a href="#services">Services</a>
  <a href="#faq">FAQ</a>
  <a href="#contacts">Contacts</a>
</div>




<div class="contact-form-container">
    <div class="image-container">
        <img src="images/form-image.jpg" alt="Image">
    </div>
    <div class="contact-form">
    [contact-form-7 id="4c6c6f4" title="Secure your busines"]
    </div>
</div>

[contact-form-7 id="4c6c6f4" title="Secure your busines"]

[contact-form-7 id="95d9e62" title="Contact form 1"]



<footer>
        <div class="column links">
            <a href="#">SiteSecurity</a>
            <a href="#">Services</a>
            <a href="#">FAQ</a>
            <a href="#">Contact</a>
        </div>

        <div class="column image">
            <img src="images/form-image" alt="Logo">
        </div>

        <div class="column contact-info">
            <div>
            <span class="material-symbols-outlined">
              call
              </span>               
              <p> +45 88 80 84 48</p>
            </div>
            <div>
            <span class="material-symbols-outlined">
            mail
            </span>
                <p>danmark@sitesecurity.dk</p>
            </div>
            <div>
                
            </div>
        </div>
    </footer>

</body>