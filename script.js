//SLIDE SHOW - customers reviews 

$(() => {
    $('.slick-carousel').slick({
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
});



// FAQ - opening box after clicking on arrow

$(document).ready(function () {
  $('.faq-container_box .question').on('click', function () {
      const answer = $(this).next();

      // Toggle the 'open' class to trigger CSS transitions
      answer.toggleClass('open');

      // Toggle the arrow direction
      const arrow = $(this).find('.arrow');
      arrow.text(arrow.text() === '▶' ? '▼' : '▶');
  });
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

console.log('Script.js is loaded!');
