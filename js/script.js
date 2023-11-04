function OpenRightSiderbar(){
    document.getElementById('sdbr').style.width="350px";
    document.getElementById('main-wrap').style.display="block";

    var element = document.getElementById("sdbr");
 element.classList.add("overlay");
}

function closeSidebar(){
    document.getElementById('sdbr').style.width="0px";
    document.getElementById('main-wrap').style.display="none";
      
      var element = document.getElementById("sdbr");
 element.classList.remove("overlay");        	 
}


$(document).ready(function() {
  var logoSticky = $(".logo-sticky");
  var scrollTrigger = 0.1; // Adjust this value to control when the logo appears
  var isLogoVisible = false;

  $(window).scroll(function() {
      if ($(window).scrollTop() > $(window).height() * scrollTrigger && !isLogoVisible) {
          logoSticky.fadeIn();
          isLogoVisible = true;
      } else if ($(window).scrollTop() <= $(window).height() * scrollTrigger && isLogoVisible) {
          logoSticky.fadeOut(100);
          isLogoVisible = false;
      }
  });
});

