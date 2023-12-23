// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered"); // Supprime la classe "hovered" de tous les éléments de la liste
  });
  this.classList.add("hovered"); // Ajoute la classe "hovered" à l'élément survolé
}

list.forEach((item) => item.addEventListener("mouseover", activeLink)); // Ajoute un événement 'mouseover' à chaque élément de la liste

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active"); // Bascule la classe "active" sur l'élément de navigation
  main.classList.toggle("active"); // Bascule la classe "active" sur l'élément principal
};
