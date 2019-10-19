var accItem = document.getElementsByClassName("accordion-item");
var accHD = document.getElementsByClassName("accordion-heading");

for (var i = 0; i < accHD.length; i++) {
  accHD[i].addEventListener("click", toggleItem, false);
}

function toggleItem() {
  var itemClass = this.parentNode.className;
  var toggle = this.getAttribute("aria-expanded");
  for (var i = 0; i < accItem.length; i++) {
    accItem[i].className = "accordion-item close";
    accHD[i].setAttribute("aria-expanded", "false")
  }
  if (itemClass == "accordion-item close") {
    this.parentNode.className = "accordion-item open"
  }
  if (toggle == "false") {
    this.setAttribute("aria-expanded", "true")
  }
}
