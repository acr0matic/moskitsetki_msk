const anchors = document.querySelectorAll('a[href*="#"]');
const anchorChange = document.getElementById('anchor-change');
const anchorButtons = document.querySelectorAll('[data-anchor-button]');

for (const button of anchorButtons) {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    const blockID = button.getAttribute('data-anchor-button');

    SmoothScroll(blockID);
  });
}

for (const anchor of anchors) {
  anchor.addEventListener('click', (e) => {
    e.preventDefault();
    const blockID = anchor.getAttribute('href');

    SmoothScroll(blockID);
  });
}

function SmoothScroll(blockID) {
  const section = document.getElementById(blockID.substr(1));

  if (section) {
    section.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    });
  } else { window.open(blockID, '_self'); }

  closeMobileMenu();
}

const netsScrollButtons = document.querySelectorAll('[data-scroll-nets]');
const curtainsScrollButtons = document.querySelectorAll('[data-scroll-curtains]');

for (const button of netsScrollButtons) {
  button.addEventListener('click', () => {
    SmoothScroll('#mosquito');
  });
}

for (const button of curtainsScrollButtons) {
  button.addEventListener('click', () => {
    SmoothScroll('#curtains');
  });
}

const calculatorButtons = document.querySelectorAll('.calculator-button-next, .calculator-button-prev');

for (const button of calculatorButtons) {
  button.addEventListener('click', () => {
    SmoothScroll('#calculation');
  });
}

// Пожалуй, это единственное, что есть чудесное в этом проекте
// Коментарий, поясняющий другим разработчикам, что я люблю Кристюшу <3
//
// ..........................................................30/03/2020
