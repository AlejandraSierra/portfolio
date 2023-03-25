///settings for recipes page
window.addEventListener("load", () => {

  //Get elements form url id
  var url = window.location.search;
  params = new URLSearchParams(url);
  var id = params.get('id');

  var title = "";
  var imagePath = "";
  var content = "";

  //Get information from a JSON file with the content of the blog posts
  $.getJSON("http://asierra-design.com/recetario/json/blog-entries.json", function (json) {
    for (var entry in json) {
      if (json.hasOwnProperty(entry)) {
        if (entry == id) {
          title = json[entry]["title"];
          imagePath = json[entry]["image"];
          content = json[entry]["content"];

          getEntry();
        }
      }
    }
    function getEntry() {
      document.querySelector("#post-title").innerHTML = title;
      document.querySelector("#post-img").innerHTML = "<img src='" + imagePath + "'>";
      document.querySelector("#post-content").innerHTML = content;
    }
  });
});