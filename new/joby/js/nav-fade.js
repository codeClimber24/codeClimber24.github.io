var myElement = $('.header');

$(window).on('scroll', function () {
  var st = 1 - $(this).scrollTop() / 100;
  myElement.css({
    'opacity': st
  });
});
