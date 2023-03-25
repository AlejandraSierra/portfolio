//settings for global adjustments at the navigation bar

//Searcher display
function search() {
  var searcher = document.getElementById("search-bar");
  if (searcher.style.display == "none") {
    searcher.style.display = "flex";
  } else {
    searcher.style.display = "none";
  }
}

//Searcher navigation
function goToRecipesPage(){
  location.href = "recetas.html";
};

//Side menu controls
function openNav() {
  document.getElementById("hamburger-menu").style.width = "100%";
}

function closeNav() {
  document.getElementById("hamburger-menu").style.width = "0%";
  document.id
}