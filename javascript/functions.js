/*
 **Slideshow script that cycles through images in the Header
 */
export var slideIndex = 0;

export function slideShow() {
  var i;
  var x = document.getElementsByClassName("mySlides");

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  slideIndex++;

  if (slideIndex > x.length) {
    slideIndex = 1;
  }

  x[slideIndex - 1].style.display = "block";
  setTimeout(slideShow, 5000);
}

/*
 **Script that makes Navbar disappear and reaper based on scroll behaviour
 */
export var prevScrollpos = window.pageYOffset;

export function navbarScroll() {
  window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-130px";
    }

    prevScrollpos = currentScrollPos;
  };
}

/*
 **Script that triggers animations on scroll
 */
export function animateScroll() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll(".js_scroll, .js_scroll2, .js_scroll3");
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= -120) {
        element.classList.add("scrolled");
      }
    }
  }

  window.addEventListener("scroll", checkPosition);
  window.addEventListener("resize", init);

  init();
  checkPosition();
}

/*
 **Script that increases video size and autoplays video based on scroll position
 */
export function scaleVideo() {
  window.addEventListener(
    "load",
    function () {
      var video = document.getElementById("vid"),
        footerHeight = document.getElementById("page_footer").offsetHeight,
        docHeight = document.documentElement.offsetHeight - footerHeight;

      let transformValue = "";

      window.addEventListener(
        "scroll",
        function () {
          // normalize scroll position as percentage
          var scrolled = window.scrollY / (docHeight - window.innerHeight);

          if (scrolled > 1) scrolled = 1;

          if (scrolled > 0.8) {
            transformValue = "scale(" + scrolled + ")";

            if (this.window.innerWidth >= 1024) {
              video.play();
            }
          } else {
            transformValue = "scale(0.8)";
          }

          if (video != null) {
            video.style.WebkitTransform = transformValue;
            video.style.MozTransform = transformValue;
            video.style.OTransform = transformValue;
            video.style.transform = transformValue;
          }
        },
        false
      );
    },
    false
  );
}

/*
 **Function, that recognizes if the User is using a Desktop or Mobile Device and ajdusts video behaviour accordingly
 */
export function prepareVideo() {
  var video = document.getElementById("vid"),
    mute = document.getElementById("mute");

  if (window.innerWidth < 1024) {
    video.setAttribute("controls", "");
  } else {
    video.setAttribute("onclick", "functions.unmuteVideo()");
    mute.setAttribute("onclick", "functions.unmuteVideo()");
    video.muted = true;
  }
}

/*
 **Function that is used by scaleVideo() to autoplay video
 */
export function unmuteVideo() {
  var video = document.getElementById("vid"),
    mute = document.getElementById("mute");

  if (video.muted == true) {
    video.muted = false;
    video.style.filter = "none";
    mute.style.display = "none";
  } else {
    video.muted = true;
    video.style.filter = "brightness(0.6)";
    mute.style.display = "block";
  }
}

var image = document.getElementById("HQimage"),
  modal = document.getElementById("HQimage_container"),
  image_container = document.getElementById("modal_inside_container");

export function openHQ(clicked_id) {
  image.src = clicked_id;
  modal.style.display = "block";
  image_container.classList.add("clicked");
}

export function closeHQ() {
  image.src = "";
  image_container.classList.remove("clicked");
  modal.style.display = "none";
}

var images = document.getElementsByClassName("gallery_div");
var gallery = document.getElementById("gallery_content");

export function filterElements(filter) {
  var criteria = filter;

  if (filter == "all") {
    criteria = "gallery_div";
  }

  activeButton(filter);

  gallery.classList.remove("animate");

  for (let image of images) {
    if (image.classList.contains(criteria)) {
      image.classList.add("show");
    } else {
      image.classList.remove("show");
    }
  }

  void gallery.offsetWidth;

  gallery.classList.add("animate");
}

export function activeButton(btn) {
  removeAllStatusPressed();
  switch (btn) {
    case "all":
      document.getElementById("btn_all").classList.add("pressed");
      break;
    case "shop":
      document.getElementById("btn_shop").classList.add("pressed");
      break;
    case "leisure":
      document.getElementById("btn_leisure").classList.add("pressed");
      break;
    case "other":
      document.getElementById("btn_other").classList.add("pressed");
      break;
  }
}

function removeAllStatusPressed() {
  document.getElementById("btn_all").classList.remove("pressed");
  document.getElementById("btn_shop").classList.remove("pressed");
  document.getElementById("btn_leisure").classList.remove("pressed");
  document.getElementById("btn_other").classList.remove("pressed");
}

export function cookiesAccepted() {
  const d = new Date();
  const banner = document.getElementById("cookie_banner");
  d.setTime(d.getTime() + 5 * 365 * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = "cookies=accepted; expires=" + expires + ";path=/";

  banner.style.display = "none";
}
