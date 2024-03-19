// Initialize Wow
new WOW().init();

$(".testimonial-slick").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
$(window).scroll(function () {
  var window_top = $(window).scrollTop() + 1;
  if (window_top > 50) {
    $("header").addClass("menu_fixed animated fadeIn");
  } else {
    $("header").removeClass("menu_fixed animated fadeIn");
  }
});
function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      includedLanguages: "en,es",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    },
    "google_translate_element"
  );
}
