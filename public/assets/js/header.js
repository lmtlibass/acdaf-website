let menu = document.getElementById('menu');
let nav = document.getElementById("menuArea");
let close = document.getElementById("close");
let open = document.getElementById("open");

menu.addEventListener('click', function () {
     if (nav.style.display === "block") {
          nav.style.display = "none";
          close.style.visibility = "hidden";
          open.style.visibility = "visible";
     } else {
          nav.style.display = "block";
          close.style.visibility = "visible";
          open.style.visibility = "hidden";
     }
}
);