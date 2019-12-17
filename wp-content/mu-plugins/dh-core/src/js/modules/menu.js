import { eventOn } from './event';
import { setAttr, attrToBool } from './attr';
import { saveScroll } from './saveScroll';

function toggleMenu(e) {
  const menuOpen = attrToBool('aria-expanded', e.currentTarget);
  const menu = document.getElementById(e.currentTarget.getAttribute('aria-controls'));
  setAttr('aria-expanded', !menuOpen, e.currentTarget);
  setAttr('data-menu-open', !menuOpen, menu);
  saveScroll(menu)(!menuOpen);
}

export function setupMenu(menuToggle) {
  eventOn('click', toggleMenu, menuToggle);
}
