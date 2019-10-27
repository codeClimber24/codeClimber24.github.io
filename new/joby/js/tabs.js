var tabItem = document.getElementsByClassName('tab-item');
var tabHead = document.getElementsByClassName('tab-head');

for (var i = 0; i < tabHead.length; i++) {
  tabHead[i].addEventListener('click', toggleItem, false);
}

function toggleItem () {
  // find id of item clicked on
  var itemId = this.getAttribute('aria-controls');
  // get item clicked on usiing id
  var item = document.getElementById(itemId);

  // if tab is not selected
  if (this.getAttribute('aria-selected') === 'false') {
    // collapse all tabs
    for (var i = 0; i < tabItem.length; i++) {
      tabItem[i].className = 'tab-item';
      tabHead[i].setAttribute('aria-selected', 'false')
    }
    // expand the relavent tabpanel
    item.className = 'tab-item active';
    this.setAttribute('aria-selected', 'true');
  } else {
    // collapse the relavent tabpanel
    item.className = 'tab-item';
    this.setAttribute('aria-selected', 'false');
  }
}
