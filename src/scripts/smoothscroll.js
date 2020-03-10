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

var netsScrollButtons = document.querySelectorAll("[data-scroll-nets]");
var curtainsScrollButtons = document.querySelectorAll("[data-scroll-curtains]");

for (const button of netsScrollButtons) {
  button.addEventListener("click", () => {
    SmoothScroll("mosquito");
  });
}

for (const button of curtainsScrollButtons) {
  button.addEventListener("click", () => {
    SmoothScroll("curtains");
  });
}
