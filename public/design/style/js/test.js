 $( document ).ready(function() {

  "use strict"; // Start of use strict

 $('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});

// =========================== =========
 
});


