/* global jQuery */
export function marquee(context, speed) {
  jQuery(context).slick({
    infinite: true,
    slidesToShow: 3,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: speed,
    dots: false,
    variableWidth: true,
    cssEase: 'linear',
    draggable: false,
    focusOnSelect: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    swipe: false,
    touchMove: false,
  });
}

export function media(context) {
  jQuery(`${context} .slider`).slick({
    infinite: true,
    slidesToShow: 1,
    arrows: true,
    autoplay: false,
    speed: 500,
    dots: false,
    variableWidth: true,
    prevArrow: `${context} .button-prev`,
    nextArrow: `${context} .button-next`,
  });
}

export function productSlider(context) {
  jQuery(`${context} .woocommerce-product-gallery__wrapper`).slick({
    infinite: true,
    slidesToShow: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 7000,
    speed: 500,
    dots: true,
    variableWidth: false,
    prevArrow: `${context} .button-prev`,
    nextArrow: `${context} .button-next`,
  });
}
