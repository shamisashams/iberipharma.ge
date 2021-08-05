$(".the_history_timeline").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    arrows: false,
    dots: true,
    speed: 900,
    autoplay: false,
    infinite: false,
    cssEase: "linear",
    touchThreshold: 100,
});

$(".wellness_blog_slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#prev_blog",
    nextArrow: "#next_blog",
    dots: false,
    speed: 300,
    autoplay: false,
    infinite: true,
    cssEase: "linear",
    touchThreshold: 100,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1150,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 550,
            settings: {
                centerMode: true,
                slidesToShow: 1,
            },
        },
    ],
});

$(".brands_slider").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#prev_brand",
    nextArrow: "#next_brand",
    dots: false,
    speed: 300,
    autoplay: false,
    infinite: true,
    cssEase: "linear",
    touchThreshold: 100,
    responsive: [
        {
            breakpoint: 1150,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
$(".img_row").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#prev_primg",
    nextArrow: "#next_primg",
    dots: false,
    speed: 300,
    autoplay: false,
    infinite: false,
    cssEase: "linear",
    touchThreshold: 100,
    responsive: [
        {
            breakpoint: 470,
            settings: {
                slidesToShow: 3,
            },
        },
    ],
});
