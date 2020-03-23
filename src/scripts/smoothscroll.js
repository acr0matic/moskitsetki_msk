const anchors = document.querySelectorAll('a[href*="#"]');
const anchorChange = document.getElementById("anchor-change");
const anchorButtons = document.querySelectorAll("[data-anchor-button]");

for (let button of anchorButtons) {
  button.addEventListener("click", function(e) {
    e.preventDefault();
    const blockID = button.getAttribute("data-anchor-button");

    SmoothScroll(blockID);
  });
}

for (let anchor of anchors) {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    const blockID = anchor.getAttribute("href");

    SmoothScroll(blockID);
  });
}

function SmoothScroll(blockID) {
  var section = document.getElementById(blockID.substr(1));

  if (section)
    section.scrollIntoView({
      behavior: "smooth",
      block: "start"
    });

  else
    window.open(blockID, "_self");

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

CheckViewport();

function CheckViewport() {
  var media = window.matchMedia("(max-width: 768px)");

  if (media.matches)
    anchorChange.setAttribute("href", "production.html#curtains")
}

var logoElements = document.querySelectorAll(".logo");

for (const logo of logoElements) {
  logo.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
}
