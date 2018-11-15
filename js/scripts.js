function navbar () {
  var topNav = document.getElementById('myTopNav')
  var aria = this.getAttribute('aria-expanded')
  topNav.classList.toggle('show')
  // if (topNav.className == 'closed') {
  // topNav.setAttribute('class', 'show');
  // } else if (topNav.className == 'show') {
  // topNav.setAttribute('class', 'closed');
  // }
  if (aria === 'false') {
    btn.setAttribute('aria-expanded', 'true')
  } else if (aria === 'true') {
    btn.setAttribute('aria-expanded', 'false')
  }
  btn.classList.toggle('active')
}

var btn = document.getElementById('expandoBtn')
btn.addEventListener('click', navbar)
