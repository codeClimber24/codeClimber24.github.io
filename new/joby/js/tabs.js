var tabItem = document.getElementsByClassName('tab-item');
var tabHead = document.getElementsByClassName('tab-head');

for (var i = 0; i < tabHead.length; i++) {
  tabHead[i].addEventListener('click', toggleItem, false);
}

function toggleItem () {
  var itemClass = this.parentNode.className;
  var toggle = this.getAttribute('aria-expanded');
  for (var i = 0; i < tabItem.length; i++) {
    tabItem[i].className = 'tab-item';
    tabHead[i].setAttribute('aria-expanded', 'false')
  }
  if (itemClass === 'tab-item') {
    this.parentNode.className = 'tab-item active'
  }
  if (toggle === 'false') {
    this.setAttribute('aria-expanded', 'true')
  }
}
