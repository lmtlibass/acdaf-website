document.addEventListener("DOMContentLoaded", function () {
     let menu = document.getElementById("menu");
     let nav = document.getElementById("menuArea");
     let barranv = document.getElementById("nav");

     menu.addEventListener("click", function () {
          nav.classList.toggle("open");
          menu.classList.toggle("openmenu");
     });
});
