import '../images/pattern.png';
import '../css/main.css';

import { setupMenu } from './modules/menu';

const menuToggle = document.querySelector('.menu-button');

if (menuToggle) setupMenu(menuToggle);
