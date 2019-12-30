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

export function media(context, speed) {
  jQuery(`${context} .slider`).slick({
    infinite: true,
    slidesToShow: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: speed,
    speed: 500,
    dots: false,
    variableWidth: true,
    prevArrow: jQuery(`${context} .button-prev`),
    nextArrow: jQuery(`${context} .button-next`),
  });
}

