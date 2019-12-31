import '../css/media.css';

import { media } from './modules/sliders';
import { attrToBool } from './modules/utils';

media('.media--video');
media('.media--photo');
media('.media--article');

function togglePopup(e) {
  const popup = document.getElementById(e.currentTarget.getAttribute('aria-controls'));

  if (popup) {
    const isOpen = attrToBool(popup, 'data-popup-hidden');
    popup.setAttribute('data-popup-hidden', !isOpen);
  }
}

const popupToggles = document.querySelectorAll('[data-popup-control]');
popupToggles.forEach(toggle => toggle.addEventListener('click', togglePopup));