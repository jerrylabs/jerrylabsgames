// Menu

function toggleMobileMenu() {
  $('#btnMenu').toggleClass('expanded');
  $('#menu-main-menu').toggleClass('header__navigation--mobile-visible')
}

// Galerie

$(document).ready(function(){
   $.fancybox.defaults.buttons = ['slideShow', 'fullScreen', 'thumbs', 'close'];
});