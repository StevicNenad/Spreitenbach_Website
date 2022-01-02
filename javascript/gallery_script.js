import * as functions from './functions.js';

functions.slideShow();

var imagesHQ = document.getElementsByClassName("gallery_images");

for(var i = 0; i < imagesHQ.length; i++) {
    var image = imagesHQ[i];
    image.onclick = functions.openHQ;
}