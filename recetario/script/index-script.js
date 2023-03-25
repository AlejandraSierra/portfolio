//settings for index page
//carousel configuration
$(document).ready(function () {
  $('.responsive').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
  $("#plato-fuerte").hover(function () {
    $("#plato-fuerte-img").attr("src", "img/plato-fuerte-hover.svg");
  },
    function () {
      $('#plato-fuerte-img').attr("src", "img/plato-fuerte.svg");
    });
  $("#comida-rapida").hover(function () {
    $("#comida-rapida-img").attr("src", "img/fast-food-hover.svg");
  },
    function () {
      $('#comida-rapida-img').attr("src", "img/fast-food.svg");
    });
  $("#pastas").hover(function () {
    $("#pastas-img").attr("src", "img/pasta-hover.svg");
  },
    function () {
      $('#pastas-img').attr("src", "img/pasta.svg");
    });
  $("#guarniciones").hover(function () {
    $("#guarniciones-img").attr("src", "img/guarniciones-hover.svg");
  },
    function () {
      $('#guarniciones-img').attr("src", "img/guarniciones.svg");
    });
  $("#ensaladas").hover(function () {
    $("#ensaladas-img").attr("src", "img/ensalada-hover.svg");
  },
    function () {
      $('#ensaladas-img').attr("src", "img/ensalada.svg");
    });
  $("#desayunos").hover(function () {
    $("#desayunos-img").attr("src", "img/desayuno-hover.svg");
  },
    function () {
      $('#desayunos-img').attr("src", "img/desayuno.svg");
    });
  $("#sopas").hover(function () {
    $("#sopas-img").attr("src", "img/sopa-hover.svg");
  },
    function () {
      $('#sopas-img').attr("src", "img/sopa.svg");
    });
  $("#postres").hover(function () {
    $("#postres-img").attr("src", "img/postres-hover.svg");
  },
    function () {
      $('#postres-img').attr("src", "img/postres.svg");
    });
  $("#bebidas").hover(function () {
    $("#bebidas-img").attr("src", "img/bebidas-hover.svg");
  },
    function () {
      $('#bebidas-img').attr("src", "img/bebidas.svg");
    });
  $("#panes").hover(function () {
    $("#panes-img").attr("src", "img/panes-hover.svg");
  },
    function () {
      $('#panes-img').attr("src", "img/panes.svg");
    });
  $("#salsas").hover(function () {
    $("#salsas-img").attr("src", "img/salsas-hover.svg");
  },
    function () {
      $('#salsas-img').attr("src", "img/salsas.svg");
    });
  $("#like-img").click(function () {
    $("#like-img").attr("src", "img/liked.svg");
  });
});

//Generation of the popular recipe cards

var idCard;
window.onload = function () {

  idCard = 0;

  $.getJSON("http://asierra-design.com/recetario/json/popular-recipe-cards.json", function (json) {

    for (var recipe in json) {
      if (json.hasOwnProperty(recipe)) {

        var imgPath = json[recipe]["image-route"];
        var name = json[recipe]["recipe-name"];
        var time = "Tiempo" + "<br>" + json[recipe]["time"];
        var difficulty = "Dificultad" + "<br>" + json[recipe]["difficulty"];

        idCard++;
        generateCardRecipe(imgPath, name, time, difficulty);

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

//Newsletter Subscription Confirmation
function newsletterSubscription() {
  var subscriptionEmail = document.getElementById("newsletter-input").value;

  if (subscriptionEmail.length == 0) {
    alert("Debes ingresar un email válido");
  } else {
    alert("Te has suscrito existosamente a nuestro newsletter");
  }

}