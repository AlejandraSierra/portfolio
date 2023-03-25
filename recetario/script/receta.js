///settings for each recipe inner page

window.addEventListener("load", () => {

    var url = window.location.search;
    params = new URLSearchParams(url);
    var id = params.get('id');

    var category = "";
    var name = "";
    var subtitle = "";
    var description = "";
    var time = "";
    var difficulty = "";
    var ingredients = [];
    var imagePath = "";
    var amount = 0;
    var cookware = [];
    var instructions = [];
    var mediaPath = "";
    var sideSuggestion = "";

    // function to asign elemnts of a recipe

    $.getJSON("http://asierra-design.com/recetario/json/recipe-information.json", function (json) {
        for (var receta in json) {
            if (json.hasOwnProperty(receta)) {
                if (receta == id) {
                    category = json[receta]["category"];
                    name = json[receta]["name"];
                    subtitle = json[receta]["subtitle"];
                    description = json[receta]["description"];
                    time = json[receta]["time"];
                    difficulty = json[receta]["difficulty"];
                    imagePath = json[receta]["image"];
                    amount = json[receta]["amount"];
                    mediaPath = json[receta]["media"];
                    sideSuggestion = json[receta]["sides"];
                    ingredients = json[receta]["ingredient"];
                    cookware = json[receta]["cookware"];
                    instructions = json[receta]["instructions"];

                    getRecipe();
                    loadIngredients();
                    loadCookware();
                    loadSteps();
                }
            }
        }

        // Change check icon when clicking 

        var check = document.getElementsByClassName("check");
        var checkStatus = function () {
            this.classList.toggle("checked");
        };
        for (i = 0; i < check.length; i++) {
            check[i].addEventListener("click", checkStatus);
        }

        // Functions to increase/decrease servings using - or + buttons

        var decreaseAmount = document.querySelector("#less");
        var increaseAmount = document.querySelector("#plus");

        decreaseAmount.addEventListener("click", function () {
            var cantidad = amount;
            if (cantidad > 1) {
                cantidad--;
                amount = cantidad;
                document.querySelector("#amount").innerHTML = cantidad + " Raciones";
                ingredients.forEach((ingrediente, indice) => {
                    var userQuantity = ingrediente.quantity * cantidad;
                    document.querySelectorAll(".item")[indice].innerHTML = userQuantity + " " + ingrediente.item;
                });
            }
        });

        increaseAmount.addEventListener("click", function () {
            var cantidad = amount;
            if (cantidad >= 1) {
                cantidad++;
                amount = cantidad;
                document.querySelector("#amount").innerHTML = cantidad + " Raciones";
                ingredients.forEach((ingrediente, indice) => {
                    var userQuantity = ingrediente.quantity * cantidad;
                    document.querySelectorAll(".item")[indice].innerHTML = userQuantity + " " + ingrediente.item;
                });
            }
        });

        // print ingredients

        function printIngredients() {
            var printButton = document.querySelector("#basket");
            var printContents = document.querySelector("#ingredient-container").innerHTML; //¿porqué no me carga el contenido?
            var PrintRecipeName = document.createElement("h5");

            printButton.addEventListener("click", function () {
                document.body.innerHTML = printContents;
                PrintRecipeName.innerHTML = ("Ingredientes para " + name);
                document.body.prepend(PrintRecipeName);
                window.print();
                location.reload();
            });
        }
        printIngredients();
    });

    // function to load recipe information

    function getRecipe() {
        document.querySelector("#recipe-category").innerHTML = category;
        document.querySelector("#recipe-name").innerHTML = name;
        document.querySelector("#recipe-subtitle").innerHTML = subtitle;
        document.querySelector("#recipe-description").innerHTML = description;
        document.querySelector("#time").innerHTML = time;
        document.querySelector("#difficulty").innerHTML = difficulty;
        document.querySelector("#recipe-image").innerHTML = "<img src='" + imagePath + "'>";
        document.querySelector("#amount").innerHTML = amount + " Raciones";
        document.querySelector("#media").innerHTML = "<iframe width='540' height='328' src='" + mediaPath + "'title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        document.querySelector("#suggestions").innerHTML = sideSuggestion;
    }

    // function to print recipe

    var printRecipe = document.querySelector("#print-recipe");
    printRecipe.addEventListener("click", () => window.print());

    // function to add ingredients

    function loadIngredients() {
        var load = function () {
            for (i = 0; i < ingredients.length; i++) {
                ingredientQuantity = ingredients[i].quantity;
                ingredientItem = ingredients[i].item;
                addIngredient(ingredientQuantity, ingredientItem);
            }
        };
        load();
    }

    function addIngredient(ingredientQuantity, ingredientItem) {
        var newIngredient = document.createElement("div");
        newIngredient.classList.add("ingredient");
        newIngredient.innerHTML = `<div class='check'></div><div class='item body1'>${ingredientQuantity} ${ingredientItem}</div>`;
        document.querySelector("#ingredient-container").appendChild(newIngredient);
    }

    // function to add cookware

    function loadCookware() {
        var load = function () {
            for (i = 0; i < cookware.length; i++) {
                recipeUtensil = cookware[i];
                addUtensil(recipeUtensil);
            }
        }
        load();
    }

    function addUtensil(recipeUtensil) {
        var newUtensil = document.createElement("div");
        newUtensil.innerHTML = `<div class='check'></div><div class='item body1'>${recipeUtensil}</div>`;
        document.querySelector("#cooking-utensil").appendChild(newUtensil);
    }

    // function to add cooking steps

    function loadSteps() {
        var load = function () {
            for (i = 0; i < instructions.length; i++) {
                recipeInstruction = instructions[i];
                addInstruction(recipeInstruction);
            }
        }
        load();
    }

    function addInstruction(recipeInstruction) {
        var newStep = document.createElement("div");
        newStep.innerHTML = `<div class='check'></div><div class='item body1'>${recipeInstruction}</div>`;
        document.querySelector("#instruction").appendChild(newStep);
    }
});