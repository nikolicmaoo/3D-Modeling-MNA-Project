
  mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
  var menulist = document.getElementById("menulist");

  menulist.style.maxHeight = "0px";
  
  function togglemenu(){
    if (menulist.style.maxHeight == "0px")
    {
      menulist.style.maxHeight = "330px";
    }
    else
  {
    menulist.style.maxHeight = "0px";
  }
  }