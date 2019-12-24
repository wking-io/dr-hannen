/* global jQuery */
export function marquee(context, speed) {
  jQuery(context).slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: speed,
    dots: false,
    variableWidth: true,
    cssEase: 'linear'
  });
}
