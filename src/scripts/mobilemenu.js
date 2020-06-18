const mobileMenu = document.querySelector('.mobile-menu-wrapper');
const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
const mobileMenuButton = document.getElementById('mobile-menu-button');

mobileMenuButton.addEventListener('click', () => {
  mobileMenuButton.classList.toggle('is-active');
  openMobileMenu();
});


function openMobileMenu() {
  mobileMenu.classList.add('mobile-menu-visible');
  mobileMenuOverlay.classList.add('mobile-menu-overlay-visible');
}

function closeMobileMenu() {
  if (mobileMenu.classList.contains('mobile-menu-visible')) mobileMenu.classList.remove('mobile-menu-visible');

  if (mobileMenuOverlay.classList.contains('mobile-menu-overlay-visible')) mobileMenuOverlay.classList.remove('mobile-menu-overlay-visible');
}
