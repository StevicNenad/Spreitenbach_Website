import * as functions from './functions.js';

functions.slideShow();
functions.filterElements("all");
functions.navbarScroll();
functions.animateScroll();


//Gets all anchors on page and adds a new function on click. Prevents href from opening a new window.
const imagesHQ = document.getElementsByClassName("gallery_images");

for(let image of imagesHQ) {
    image.addEventListener("click", function(e){
        e.preventDefault();
        functions.openHQ(this.href)
    })
}

//Adds a click function on Modal that closes the Image preview when you click to the side of it
var modal = document.getElementById("modal_inside_container");

modal.addEventListener("click", functions.closeHQ);

//Adds functions to every button in the gallery
var btn_all = document.getElementById("btn_all"),
    btn_shop = document.getElementById("btn_shop"),
    btn_leisure = document.getElementById("btn_leisure"),
    btn_other = document.getElementById("btn_other");

btn_all.addEventListener("click", function(){ functions.filterElements("all") });
btn_shop.addEventListener("click", function(){ functions.filterElements("shop") });
btn_leisure.addEventListener("click", function(){ functions.filterElements("leisure") });
btn_other.addEventListener("click", function(){ functions.filterElements("other") });