var myElement = $('.header');

$(window).on('scroll', function () {
  var st = $(this).scrollTop();
  myElement.css({
    'opacity': 1 - st / 100 !important
  });
  myElement.css({
    'height': 1 - st / 100
  });
});
