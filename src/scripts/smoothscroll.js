const anchors = document.querySelectorAll('a[href*="#"]');
const anchorButtons = document.querySelectorAll("[data-anchor-button]");

for (let button of anchorButtons) {
  button.addEventListener("click", function(e) {
    e.preventDefault();
    const blockID = button.getAttribute("data-anchor-button").substr(1);

    SmoothScroll(blockID);
  });
}

for (let anchor of anchors) {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    const blockID = anchor.getAttribute("href").substr(1);

    SmoothScroll(blockID);
  });
}

function SmoothScroll(blockID) {
  var section = document.getElementById(blockID);

  section.scrollIntoView({
    behavior: "smooth",
    block: "start"
  });
  
  closeMobileMenu();
}

var swiperProductButton = document.querySelectorAll("[data-scroll-product]");

for (const button of swiperProductButton) {
  button.addEventListener("click", () => {
    SmoothScroll("#items");
  });
}
