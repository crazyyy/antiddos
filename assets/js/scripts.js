// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
jQuery(document).ready(function($) {
  jQuery('.tab-choise--button img').each(function() {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
      if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }

      // Replace image with new SVG
      $img.replaceWith($svg);

    }, 'xml');

  });
});
(function() {
  var $elements = $('.double-tarifs--item');
  var maxheight = 0;
  $elements.each(function() {
    if ($(this).height() > maxheight) {
      maxheight = $(this).height();
    }
  });
  $elements.height(maxheight);
}());
(function() {
  var $elements = $('.footer--first');
  var maxheight = 0;
  $elements.each(function() {
    if ($(this).height() > maxheight) {
      maxheight = $(this).height();
    }
  });
  $elements.height(maxheight);
}());
(function() {
  var $elements = $('.our-tech--item');
  var maxheight = 0;
  $elements.each(function() {
    if ($(this).height() > maxheight) {
      maxheight = $(this).height();
    }
  });
  $elements.height(maxheight);
}());
(function() {
  var $elements = $('.choise-pay--item');
  var maxheight = 0;
  $elements.each(function() {
    if ($(this).height() > maxheight) {
      maxheight = $(this).height();
    }
  });
  $elements.height(maxheight);
}());
(function() {
  var logoHeight = $('header .logo').height();
  $('.header--nav-mobile').height(logoHeight)
}());
$(document).ready(function() {
  /** tab choise panel slider */
  $('.tab-choise--choise .tab-choise--button').on('click', function(e) {

    $('.tab-choise--button-active').removeClass('tab-choise--button-active');
    $(this).addClass('tab-choise--button-active');

    var attr = $(this).attr('data-type');
    var tt = '.tab-choise--type-' + attr;
    var $newItemSelector = $(tt);

    $('.tab-choise--active').removeClass('tab-choise--active');
    $newItemSelector.addClass('tab-choise--active');

    $('html, body').animate({
      scrollTop: $newItemSelector.offset().top
    }, 2000);


  })

  /** calc for main page */
  // default vars
  var typeType = 1;
  var typeVisit = 2;
  var typeTraf = 3;
  var typeSize = 4;
  var typeServ = 5;
  $('.table-calc button').on('click', function(e) {
    // remove active class and ad to this button
    var $parentTr = $(this).parent('td').parent('tr');
    $parentTr.children('td').children('button').removeClass('btn-table-active');
    $(this).addClass('btn-table-active');
    var dataType = $(this).attr('data-type')

    var choosedPackage = 'VPS2';

    var package = {

    }

    if ( $parentTr.hasClass('type-type') ) {
      typeType = dataType
    } else if ( $parentTr.hasClass('type-visit') ) {
      typeVisit = dataType
    } else if ( $parentTr.hasClass('type-traf') ) {
      typeTraf = dataType
    } else if ( $parentTr.hasClass('type-size') ) {
      typeSize = dataType
    } else if ( $parentTr.hasClass('type-serv') ) {
      typeServ = dataType
    }

    if ( typeType == 1 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting3';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Hosting2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Hosting3';
      }
    } else if ( typeType == 2 ) {
      // // shared
      // if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
      //   choosedPackage = 'Hosting1';
      // } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
      //   choosedPackage = 'Hosting2';
      // } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
      //   choosedPackage = 'Hosting3';
      // }
      // // vps
      // else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
      //   choosedPackage = 'VPS1';
      // } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 4 ) && ( typeServ == 2 ) ) {
      //   choosedPackage = 'VPS2';
      // } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
      //   choosedPackage = 'VPS3';
      // }
      // // dedic
      // else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
      //   choosedPackage = 'Dedicated1';
      // }
    }


    console.log(typeType + ' ' + typeVisit + ' ' + typeTraf + ' ' + typeSize + ' ' + typeServ + ' ' + dataType)
    console.log(choosedPackage)

    $('.calc-result h5 span').fadeOut(500);

    $('.calc-result h5 span').html(choosedPackage)

    $('.calc-result h5 span').fadeIn(500);


    // first-line




  })


  $('.change-lang .active').on('click', function(e) {
    $(this).removeClass('active')
    $(this).siblings().addClass('active');
  })

  $('.related_posts .relatedthumb').each(function(index, el) {
    var elementWidth = $(this).width();
    $(this).height(elementWidth);
  });

  // mobile menu
  $('.header--nav-mobile .fa-bars').on('click', function(e) {
    if (!$(this).hasClass('mobiled')) {
      $(this).addClass('mobiled')
      $('.header--nav-mobile .fa-times').fadeIn(400);
      $('.headnav').fadeIn(400);
    } else {
      $(this).removeClass('mobiled')
      $('.header--nav-mobile .fa-times').fadeOut(400);
      $('.headnav').fadeOut(400);
    }
  })
  $('.header--nav-mobile .fa-times').on('click', function(e) {
    $('.header--nav-mobile .fa-bars').removeClass('mobiled')
    $(this).fadeOut(400);
    $('.headnav').fadeOut(400);
  })


});
