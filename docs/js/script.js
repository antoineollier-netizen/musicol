// Sélectionne le bouton
const btn = document.getElementById("darkModeBtn");

// Écoute le clic pour basculer la classe 'dark' sur le body
btn.addEventListener("click", function() {
  document.body.classList.toggle("dark");
});
