import * as functions from "./functions.js";

functions.prepareVideo();
functions.slideShow();
functions.navbarScroll();
functions.animateScroll();
functions.scaleVideo();

var video = document.getElementById("vid"),
  mute_button = document.getElementById("mute");

video.addEventListener("click", functions.unmuteVideo);
mute_button.addEventListener("click", functions.unmuteVideo);

//Adds listener to cookie consent button
var agree_btn = document.getElementById("agree_button");

agree_btn.addEventListener("click", function () {
  functions.cookiesAccepted();
});
