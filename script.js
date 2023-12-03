jQuery(() => {
    // Slick Carousel
    jQuery('.slick-carousel').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    // FAQ Interaction
    jQuery('.faq-container_box .question').on('click', function () {
        const answer = jQuery(this).next();

        // Toggle the 'open' class to trigger CSS transitions
        answer.toggleClass('open');

        // Toggle the arrow direction
        const arrow = jQuery(this).find('.arrow');
        arrow.text(arrow.text() === '▶' ? '▼' : '▶');
    });

    console.log('Script.js is loaded!');
});


/*document.addEventListener('DOMContentLoaded', function () {
  const questions = document.querySelectorAll('.faq-container_box .question');

  questions.forEach(question => {
      question.addEventListener('click', function () {
          const answer = this.nextElementSibling;

          // Toggle the 'open' class to trigger CSS transitions
          answer.classList.toggle('open');

          // Toggle the arrow direction
          const arrow = this.querySelector('.arrow');
          arrow.textContent = arrow.textContent === '▶' ? '▼' : '▶';
      });
  });
});
*/

