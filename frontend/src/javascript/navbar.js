const navbar = document.getElementById('navbar');

window.addEventListener('scroll', function() {
  if (window.scrollY > 0) {
    navbar.style.opacity = 60;
  } else {
    navbar.style.opacity = 1;
  }
});