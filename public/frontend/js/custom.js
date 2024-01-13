
function ClinetSlider() {
    $("#testimonial-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        itemsMobile: [650, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true,
    });
}

var owl = $(".slider");
owl.owlCarousel();
// Go to the next item
$(".prvBtn").click(function () {
    owl.trigger("next.owl.carousel");
});
// Go to the previous item
$(".nxtBtn").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger("prev.owl.carousel", [300]);
});

/*text animation end*/
function textAnimation() {
    console.log($(".post-module"));
    $(".post-module").hover(function () {
        console.log("hover iner");
        $(this).find(".description").animate(
            {
                height: "toggle",
                opacity: "toggle",
            },
            300
        );
    });

}

