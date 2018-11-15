function fadeIn () {
  btn.classList.add('active')
  var op = 0
  topNav.style.opacity = 0
  topNav.setAttribute('class', 'show')
  var timer = setInterval(function () {
    if (op >= 1) {
      clearInterval(timer)
    }
    topNav.style.opacity = op
    op += 0.1
  }, 20)
  btn.setAttribute('aria-expanded', 'true')
}

function fadeOut () {
  btn.classList.remove('active')
  var op = 1
  var timer = setInterval(function () {
    if (op <= 0) {
      clearInterval(timer)
    }
    topNav.style.opacity = op
    op -= 0.1
  }, 20)
  btn.setAttribute('aria-expanded', 'false')
  setTimeout(function () {
    topNav.setAttribute('class', 'closed')
  }, 210)
}

var btn = document.getElementById('expando-btn')
var topNav = document.getElementById('myTopNav')
// var aria = btn.getAttribute('aria-expanded')
btn.addEventListener('click', function () {
  if (btn.classList.contains('active')) {
    fadeOut()
  } else {
    fadeIn()
  }
})
