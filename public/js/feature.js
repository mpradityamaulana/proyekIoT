document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transition = 'transform 0.2s ease';
    });
  });


function toggleMenu() {
  const nav = document.getElementById('nav-menu');
  nav.classList.toggle('show');
}