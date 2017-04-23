var  mn = $(".main-nav");
    mns = "main-nav-scrolled";
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});
    
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
