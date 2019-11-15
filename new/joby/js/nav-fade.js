var myElement = $('.header');

$(window).on('scroll', function () {
  var st = 1 - $(this).scrollTop() / 100;
  var opacity = st + '!important';
  var height = st + 'px';
  myElement.css({
    'opacity': opacity,
    'height': height
  });
});
