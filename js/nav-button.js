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
  }, 50)
  btn.setAttribute('aria-expanded', 'true')
  btn.setAttribute('aria-label', 'Close navigation menu');
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
  }, 50)
  btn.setAttribute('aria-expanded', 'false')
  btn.setAttribute('aria-label', 'Open navigation menu');
  setTimeout(function () {
    topNav.setAttribute('class', 'closed')
  }, 510)
}

var btn = document.getElementById('nav-btn')
var topNav = document.getElementById('topNav')
btn.addEventListener('click', function () {
  if (btn.classList.contains('active')) {
    fadeOut()
  } else {
    fadeIn()
  }
})
