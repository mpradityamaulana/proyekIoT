function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-menu");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }
  
  window.onclick = function(event) {
    if (!event.target.closest('.user-dropdown')) {
      const dropdown = document.getElementById("dropdown-menu");
      if (dropdown) dropdown.style.display = "none";
    }
  };

  function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  sidebar.classList.toggle("active");
  overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
}

function closeSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  sidebar.classList.remove("active");
  overlay.style.display = "none";
}
