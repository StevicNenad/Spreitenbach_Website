/*
**Slideshow script
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
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000);
}

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

/*
**Navbar script
*/
/*
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

window.onscroll = function() {stick_navbar()};

function stick_navbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}*/

/*
**Scroll animation script
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


window.addEventListener( 'load', function() {
  var video = document.getElementById('vid'),
      docHeight = document.documentElement.offsetHeight;
  
  window.addEventListener( 'scroll', function() {
        // normalize scroll position as percentage
    var scrolled = window.scrollY / ( docHeight - window.innerHeight );

    if(scrolled > 1) scrolled = 1;

    if(scrolled > 0.8) {
      transformValue = 'scale('+scrolled+')';
    }
    else {
      transformValue = 'scale(0.8)';
    }

    if(video != null) {
      video.style.WebkitTransform = transformValue;
      video.style.MozTransform = transformValue;
      video.style.OTransform = transformValue;
      video.style.transform = transformValue;
    }

    if(scrolled == 1.0) {
      video.play();
    }
    
  }, false);
  
}, false);

function unmuteVideo() {
  var video = document.getElementById("vid");

  if(video.muted == true) {
    video.muted = false;
  }
  else {
    video.muted = true;
  }
}