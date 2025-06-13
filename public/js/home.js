function handleStart() {
  alert("Navigasi dimulai!");
}

function handleStart() {
  window.location.href = "{{ route('pages.register') }}";
}

function toggleMenu() {
  const nav = document.getElementById('nav-menu');
  nav.classList.toggle('show');
}
