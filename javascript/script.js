import * as functions from './functions.js';

functions.prepareVideo();
functions.slideShow();
functions.navbarScroll();
functions.animateScroll();
functions.scaleVideo();

var video = document.getElementById("vid"),
    mute_button = document.getElementById("mute");

video.addEventListener("click", functions.unmuteVideo);
mute_button.addEventListener("click", functions.unmuteVideo);