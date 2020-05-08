var tabHead = document.getElementsByClassName('tab-control')
var tabPanel = document.getElementsByClassName('tab-panel')
var i
var ele

for (i = 0; i < tabHead.length; i++) {
  tabHead[i].addEventListener('click', toggleTab, false)
}

function toggleTab () {
  var itemId = this.getAttribute('id')
  for (i = 0; i < tabPanel.length; i++) {
    tabPanel[i].className = 'tab-panel hello'
    tabHead[i].setAttribute('aria-expanded', 'false')
    tabHead[i].classList.remove('active')
  }
  switch (itemId) {
    case 'tab1' :
      ele = document.getElementById('tab-1')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab2' :
      ele = document.getElementById('tab-2')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab3' :
      ele = document.getElementById('tab-3')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab4' :
      ele = document.getElementById('tab-4')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab5' :
      ele = document.getElementById('tab-5')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab6' :
      ele = document.getElementById('tab-6')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab7' :
      ele = document.getElementById('tab-7')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
    case 'tab8' :
      ele = document.getElementById('tab-8')
      ele.className = 'tab-panel hello active'
      this.setAttribute('aria-expanded', 'true')
      this.classList.add('active')
      break
  }
}
