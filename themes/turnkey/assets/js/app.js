/**
 * app.js is for global javascript. Page-specific JS should go in its own file and included on a page via the onStart() method
  */

//Initialize animate on screen
AOS.init();

//add class names based on url to sub menu
$(function() {
    if ((location.pathname.split("/")[1]) !== ""){
        $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('subActive');
    }
    else {
        $('nav li.home-link a').addClass('active');
    }
});

/** add active class and stay opened when selected */
var url = window.location;

// add parent active class
$('ul.dropdown-menu a').filter(function() {
    return this.href == url;
}).parents("li").eq(3).addClass('active');
