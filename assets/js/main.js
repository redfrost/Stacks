// Avoid `console` errors in browsers that lack a console.
(function(){var e;var t=function(){};var n=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"];var r=n.length;var i=window.console=window.console||{};while(r--){e=n[r];if(!i[e]){i[e]=t}}})()




// Preloader - Hide content until the page is fully loaded
jQuery(document).ready(function() {
	$(window).load(function() {
		// When the page has loaded
		$("#preloader").fadeOut(); // fade out preloader
		$(".preloading").fadeTo("slow", 1); // fade in content
	});
// End
});




// Custom scripts
jQuery(document).ready(function() {


  // Carousel Auto
  $('#myCarousel.slide').carousel({ interval: 6000, cycle: true });


  // Smooth Scroll
  $('.nav a').smoothScroll({offset: -73 });
  $('.back-top a').smoothScroll({offset: -100 });


  // Scrollspy offset
  $('[data-spy="scroll"]').scrollspy({ offset: 100 });


  // Tooltip & Popover
  $("[data-toggle=tooltip]").tooltip();
  $("[data-toggle=popover]").popover();


  // Affix
  $('.navbar-fixed-top').affix({ offset: {
      top: 40,
      bottom: null
    }
  });


  //Back-top Button scroll fade
  $(window).scroll(function() {
    if ($(this).scrollTop() > 150)
         { $('.back-top-fade').fadeIn(); }
    else { $('.back-top-fade').fadeOut();}
  });

// End
});




// Selected Menu
$(function(){
  var url = window.location.pathname,
    urlRegExp = new RegExp(url == '/' ? window.location.origin + '/?$' : url.replace(/\/$/,''));
    $('.navbar .nav li.page-link a').each(function(){
      if(urlRegExp.test(this.href.replace(/\/$/,''))){
        $(this.parentNode).addClass('active');
      }
    });
// End
});




// Map auto convert
jQuery(document).ready(function() {
//Convert Address tags into a map link
	$('.address').each(function() {
		var link = "<a href='http://maps.apple.com/?q=" + encodeURIComponent( $(this).text() ) + "' target='_blank'>" + $(this).text() + "</a>";
		$(this).html(link);
	});

//Convert Address into an embedded map
  $(".mapaddress").each(function(){
    var embed ="<iframe width='100%' height='350' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe>";
    $(this).html(embed);
  });

// End
});




// Magnific Popup
jQuery(document).ready(function() {

  //Video
  $('.popup-video').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  //Map
  $('.popup-map').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  //Image
  $('.popup-image').magnificPopup({
    disableOn: 700,
    type: 'image',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  //Image
  $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: { verticalFit: true }
  });

  //Image
  $('.image-popup-fit-width').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    image: { verticalFit: false }
  });

  //Image
  $('.image-popup-no-margins').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    image: { verticalFit: true },
    zoom: { enabled: true, duration: 300 } // don't foget to change the duration also in CSS
  });

// End
});

