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
    SmoothScroll("#mosquito");
  });
}

for (const button of curtainsScrollButtons) {
  button.addEventListener("click", () => {
    SmoothScroll("#curtains");
  });
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

let calculatorButtons = document.querySelectorAll(".calculator-button-next, .calculator-button-prev");

for (const button of calculatorButtons) {
  button.addEventListener("click", () => {
    SmoothScroll("#calculation");
  })
}

// Пожалуй, это единственное, что есть чудесное в этом проекте
// Коментарий, поясняющий другим разработчикам, что я люблю Кристюшу <3
//
// ..........................................................30/03/2020
