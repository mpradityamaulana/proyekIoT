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
  