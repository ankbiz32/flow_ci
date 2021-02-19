$(function () {
    $(document).scroll(function () {
        var $nav = $("header");
        var $scrollHeight= 200 ;
        $nav.toggleClass('scrolled', $(this).scrollTop() > $scrollHeight);
    });
});


// Feedbacks slider
$('.feedback-container').owlCarousel({
    nav:true,
    loop:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    navText: ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
    responsive:{
        0:{
            margin:15,
            stagePadding:30,
            items:1
        },
        600:{
            margin:10,
            stagePadding:60,
            items:2
        },
        1000:{
            margin:15,
            stagePadding:80,
            items:2
        }
    }
})




function openDrop() {
  document.getElementById("openDrop").classList.toggle("dropped");
  $('.main-link').css('z-index','-1');
}
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.btnDrop')) {
      var dropdowns = document.getElementsByClassName("openDrop");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('dropped')) {
          openDropdown.classList.remove('dropped');
        }
      }
      $('.main-links').css('z-index','1');
    }
  }

  $( "#blurbg" ).click(function() {
    $('#navcheck').prop('checked', false);
    $('#blurbg').toggleClass('shown');
  });

  $( "#navcheck" ).change(function() {
    $('#blurbg').toggleClass('shown');
  });