import '../css/app.css';

import {
  Collapse,
  Dropdown,
  Modal,
  Tab,
  Carousel,
  initTWE,
} from "tw-elements";

// Initialize
initTWE({ Collapse, Dropdown, Modal, Tab, Carousel });

const hamburgers = document.querySelectorAll(".hamburger");

hamburgers.forEach((hamburger) => {
  hamburger.addEventListener("click", function () {
    const menu = this.closest("nav").querySelector(".menu");
    menu.classList.toggle("hidden");
    menu.classList.toggle("flex");
    menu.classList.toggle("flex-col");
  });
});
    


  