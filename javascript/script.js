/*
**Slideshow script that cycles through images in the Header
*/
var slideIndex = 0;

carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  slideIndex++;

  if (slideIndex > x.length) {
    slideIndex = 1
  }

  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000);
}

/*
**Script that makes Navbar disappear and reaper based on scroll behaviour
*/
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }

  prevScrollpos = currentScrollPos;
} 

function responsive(window_width) {
  if(window_width.matche){
    /*
    **Script that triggers animations on scroll
    */
    animateScroll();

    function animateScroll() {
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
            element.classList.add('scrolled');
          }
        }
      }

      window.addEventListener('scroll', checkPosition);
      window.addEventListener('resize', init);

      init();
      checkPosition();
    };

    /*
    **Script that increases video size and autoplays video based on scroll position
    */
    scaleVideo();

    function scaleVideo() {

      window.addEventListener('load', function () {
        var video = document.getElementById('vid'),
          footerHeight = document.getElementById("page_footer").offsetHeight;
        docHeight = document.documentElement.offsetHeight - footerHeight;

        window.addEventListener('scroll', function () {
          // normalize scroll position as percentage
          var scrolled = window.scrollY / (docHeight - window.innerHeight);

          if (scrolled > 1) scrolled = 1;

          if (scrolled > 0.8) {
            transformValue = 'scale(' + scrolled + ')';
            video.play();
          }
          else {
            transformValue = 'scale(0.8)';
          }

          if (video != null) {
            video.style.WebkitTransform = transformValue;
            video.style.MozTransform = transformValue;
            video.style.OTransform = transformValue;
            video.style.transform = transformValue;
          }
        }, false);
      }, false);
    }

    /*
    **Function that is used by scaleVideo() to autoplay video
    */
    function unmuteVideo() {
      var video = document.getElementById("vid"),
        mute = document.getElementById("mute");

      if (video.muted == true) {
        video.muted = false;
        video.style.filter = "none";
        mute.style.display = "none";
      }
      else {
        video.muted = true;
        video.style.filter = "brightness(0.6)";
        mute.style.display = "block";
      }
    }
  }
  else {

  }
}

var x = window.matchMedia("(min-width: 800px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state ch