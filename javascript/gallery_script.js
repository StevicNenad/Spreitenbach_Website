import * as functions from './functions.js';

functions.slideShow();
functions.filterElements("all");
functions.navbarScroll();

const imagesHQ = document.getElementsByClassName("gallery_images");

for(let image of imagesHQ) {
    image.addEventListener("click", function(e){
        e.preventDefault();
        functions.openHQ(this.href)
    })
}

var modal = document.getElementById("modal_inside_container");

modal.addEventListener("click", functions.closeHQ);


var btn_all = document.getElementById("btn_all"),
    btn_shop = document.getElementById("btn_shop"),
    btn_leisure = document.getElementById("btn_leisure"),
    btn_other = document.getElementById("btn_other");

btn_all.addEventListener("click", function(){ functions.filterElements("all") });
btn_shop.addEventListener("click", function(){ functions.filterElements("shop") });
btn_leisure.addEventListener("click", function(){ functions.filterElements("leisure") });
btn_other.addEventListener("click", function(){ functions.filterElements("other") });