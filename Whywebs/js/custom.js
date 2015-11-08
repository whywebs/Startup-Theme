/* --------------------------------------------- 

* Filename:     custom.js
* Version:      1.0.0 (2015-04-03)
* Website:      http://www.Whywebs.com
* Description:  System JS
* Author:       Whywebs Dev Team
                info@Whywebs.com

-----------------------------------------------*/

jQuery(document).ready(function($) {
  
  $('.social-icons li').each(function(){
    var url = $(this).find('a').attr('href');
    if(url == ''){
     $(this).hide();
    }
    $('.social-icons').addClass('bounceIn');
  });
  
  // Front page blocks

  var i = 1;
  
  $('.front-blocks .region').each(function() {
     $(this).addClass('frontuniqueblocks'+i++);
  });

  $('.not-front div').removeClass('Whywebs');

  $('.nav-toggle').click(function() {
    $(this).toggleClass('dropdownactive');
    $('#main-menu').toggleClass('staticmenu');
    $('#main-menu div ul:first-child').slideToggle(250);
    return false;
  });

  $('#main-menu li').each(function() {
    if($(this).children('ul').length)
      $(this).append('<span class="drop-down-toggle"><span class="drop-down-arrow"></span></span>');
  });

  $('.drop-down-toggle').click(function() {
    $(this).parent().children('ul').slideToggle(250);
  });

  $('header.siteheader').addClass('bounceIn');
  $('h1').addClass('bounceIn');
  $('#main-menu').addClass('bounceIn');
  $('.toplayer').addClass('bounceInDown');
  $('.frontblockwrap .block >.content').addClass('Whywebs');
  $('.region-aboutme .block >.content').addClass('bounceIn');
  $('.content-wrap').addClass('bounceInUp');
  $('.portfolio-list').addClass('Whywebs bounceInDown');
  $('.region-keyskills .block >.content').addClass('bounceInUp');
  $('.region-education .block >.content').addClass('bounceIn');
  $('.region-contact .block >.content').addClass('bounceInUp');
  $('#post-content .content > article').addClass('Whywebs bounceInDown');

});

// Animation

wow = new WOW({
  boxClass: 'Whywebs',      
  animateClass: 'animated',
  offset: 0 
});

wow.init();