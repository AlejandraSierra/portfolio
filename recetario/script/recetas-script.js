///settings for recipes page
var idCard;
window.onload = function () {

  idCard = 0;
  getRecipe();
  function getRecipe(a, b) {
    //function to get JSON information of recipes with filters if required
    $.getJSON("http://asierra-design.com/recetario/json/recipe-information.json", function (json) {
      for (var recipe in json) {
        if (json.hasOwnProperty(recipe)) {
          if (a == null && b == null) {
            var imgPath = json[recipe]["miniature-img"];
            var name = json[recipe]["name"];
            var time = "Tiempo" + "<br>" + json[recipe]["time"];
            var difficulty = "Dificultad" + "<br>" + json[recipe]["difficulty"];

            idCard++;
            generateCardRecipe(imgPath, name, time, difficulty);
          } else {
            var tiempo = json[recipe]["time"].substring(0, 2);
            var dific = json[recipe]["difficulty"];
            if (a != 61) {
              if (tiempo <= a && dific == b) {
                var imgPath = json[recipe]["miniature-img"];
                var name = json[recipe]["name"];
                var time = "Tiempo" + "<br>" + json[recipe]["time"];
                var difficulty = "Dificultad" + "<br>" + json[recipe]["difficulty"];

                idCard++;
                generateCardRecipe(imgPath, name, time, difficulty);
              }
            } else {
              if (tiempo >= a && dific == b) {
                var imgPath = json[recipe]["miniature-img"];
                var name = json[recipe]["name"];
                var time = "Tiempo" + "<br>" + json[recipe]["time"];
                var difficulty = "Dificultad" + "<br>" + json[recipe]["difficulty"];

                idCard++;
                generateCardRecipe(imgPath, name, time, difficulty);
              }
            }
          }
        }
      }
      var likes = document.getElementsByClassName("like");
      var likeStatus = function () {
        this.classList.toggle("liked");
      };
      for (i = 0; i <= likes.length; i++) {
        likes[i].addEventListener("click", likeStatus);
      }

    });
  }
  // show or hide filter bar after pressing filter buttons

  var filterButton = document.querySelector("#filter-btn");
  var filterBox = document.querySelector("#filters");

  filterButton.addEventListener("click", event => {
    if (filterBox.className == "filter-hidden") {
      filterBox.className = "filter-displayed";
    } else {
      filterBox.className = "filter-hidden";
    }
  });

  // apply user filter selection
  var applyFiltersBtn = document.querySelector("#apply-filters");
  var userTime = document.querySelector("#time-filter");
  var userDifficulty = document.querySelector("#difficulty-filter");

  applyFiltersBtn.addEventListener("click", function applyFilters() {
    var time = userTime.value;
    var difficulty = userDifficulty.value;

    getRecipe(time, difficulty);
    document.getElementById("recipe-cards").innerHTML = "";
  });
};

function generateCardRecipe(imgPath, name, time, difficulty) {
  var recipeCard = document.createElement("div");

  recipeCard.innerHTML =
    "<div class='card' id='recipe-" + idCard + "'>" +
    "<img src='" + imgPath + "' alt='" + name + "-image' id='card-img'>" +
    "<a href='receta.html?" + "id=" + "recipe-" + idCard + "'id='recipe-name'>" + name + "</a>" +
    "<div id='line'>" + "</div>" +
    "<div id='like-btn' class='like'>" + "</div>" +
    "<div id='time' class='caption'>" + "<p>" + time + "</p>" + "</div>" +
    "<div id='difficulty' class='caption'>" + "<p>" + difficulty + "</p>" + "</div>" +
    "</div>";

  document.getElementById("recipe-cards").appendChild(recipeCard);
}
