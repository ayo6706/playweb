



 // Add animation/ Initialize Woo
$(document).ready(function() {
    
    'use strict';
   
    new WOW().init();
    
});




jQuery(document).ready(function($){
    var overlayNav = $('.cd-overlay-nav'),
        overlayContent = $('.cd-overlay-content'),
        navigation = $('.cd-primary-nav'),
        toggleNav = $('.cd-nav-trigger');

    //inizialize navigation and content layers
    layerInit();
    $(window).on('resize', function(){
        window.requestAnimationFrame(layerInit);
    });

    //open/close the menu and cover layers
    toggleNav.on('click', function(){
        if(!toggleNav.hasClass('close-nav')) {
            //it means navigation is not visible yet - open it and animate navigation layer
            toggleNav.addClass('close-nav');
            
            overlayNav.children('span').velocity({
                translateZ: 0,
                scaleX: 1,
                scaleY: 1,
            }, 500, 'easeInCubic', function(){
                navigation.addClass('fade-in');
            });
        } else {
            //navigation is open - close it and remove navigation layer
            toggleNav.removeClass('close-nav');
            
            overlayContent.children('span').velocity({
                translateZ: 0,
                scaleX: 1,
                scaleY: 1,
            }, 500, 'easeInCubic', function(){
                navigation.removeClass('fade-in');
                
                overlayNav.children('span').velocity({
                    translateZ: 0,
                    scaleX: 0,
                    scaleY: 0,
                }, 0);
                
                overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                    overlayContent.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0,
                    }, 0, function(){overlayContent.removeClass('is-hidden')});
                });
                if($('html').hasClass('no-csstransitions')) {
                    overlayContent.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0,
                    }, 0, function(){overlayContent.removeClass('is-hidden')});
                }
            });
        }
    });

    function layerInit(){
        var diameterValue = (Math.sqrt( Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2))*2);
        overlayNav.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0,
        }, 50).velocity({
            height : diameterValue+'px',
            width : diameterValue+'px',
            top : -(diameterValue/2)+'px',
            left : -(diameterValue/2)+'px',
        }, 0);

        overlayContent.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0,
        }, 50).velocity({
            height : diameterValue+'px',
            width : diameterValue+'px',
            top : -(diameterValue/2)+'px',
            left : -(diameterValue/2)+'px',
        }, 0);
    }
});







  $(function () {
                $('.chart').easyPieChart({
                    easing: 'easeOutBounce',
                    onStep: function (from, to, percent) {
                        $(this.el).find('.percent').text(Math.round(percent));
                    },
                    barColor:  '#ffff00c7', //FORCOLOR OF CHART
                    lineWidth: 10, //WIDTH OF STRIP OF SKILL CHART
                    size: 150, //WIDTH - HEIGHT OF SKILL CHART(SHOULD BE IN SQUARE)
                });

            });



 jQuery(window).load(function () {
  //Preloader
  setTimeout("jQuery('#preloader').animate({'opacity' : '0'},300,function(){jQuery('#preloader').hide()})",800);
  setTimeout("jQuery('.preloader_hide, .selector_open').animate({'opacity' : '1'},500)",800);
  setTimeout("jQuery('footer').animate({'opacity' : '1'},500)",2000);

});



  // ===== Scroll to Top ==== 
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 100) {       
          $('#return-to-top').fadeIn(200);   
      } else {
          $('#return-to-top').fadeOut(200);  
      }
  });
  $('#return-to-top').click(function() {     
      $('body,html').animate({
          scrollTop : 0                
      }, 500);
  });
 /*var currentTime = new Date()
 var hours =currentTime.getHours()
 var minutes = currentTime.getMinutes()
 if (minutes < 10) {

    minutes = "0" + minutes
 }


 var t_str = hours + ":" + minutes + " ";
 if (hours > 11) {
    t_str += "pm";
 } else{
    t_str += "am";
 }

 document.getElementByclass('small').innerHTML = t_str*/