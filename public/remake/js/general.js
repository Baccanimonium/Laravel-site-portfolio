$('.response-our-company-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    dots: true,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots:false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]

});

$('.examples-works-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    infinite: false,
    dots: false,
    responsive: [
        {
            breakpoint: 580,
            settings: {
                arrows: false,
                dots:false,
                slidesToShow: 1,
                slidesToScroll: 1

            }
        }
    ]
});
