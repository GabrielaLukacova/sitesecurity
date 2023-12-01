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
        cssEase: 'linear',  // Linear easing for a consistent speed
        adaptiveHeight: true,  // Adjust the height dynamically based on the content
        responsive: [
            {
                breakpoint: 768,
                // settings: {
                //     arrows: false  
                // }
            }
        ]
    });
});