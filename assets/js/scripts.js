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
$(document).ready(function() {
  $('.table-calc button').on('click', function(e){

    var $parentTr = $(this).parent('td').parent('tr');
    $parentTr.children('td').children('button').removeClass('btn-table-active');
    $(this).addClass('btn-table-active');


  })
});
