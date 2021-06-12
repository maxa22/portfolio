const hamburgerIcon = document.querySelector('.navigation__hamburger');
const hamburgerContainer = document.querySelector('.navigation__hamburger-container');
const navLinks = document.querySelectorAll('.navigation__menu-link');
const navigationOverlay = document.querySelector('.navigation__overlay');


hamburgerIcon.addEventListener('click', toggleActiveMenu);
navigationOverlay.addEventListener('click', toggleActiveMenu);

// remove translate from links if screen is greater than 991px;

let widthScreen = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;


if (widthScreen > 991) {
  removeTranslateFromLinks(navLinks);
}

window.addEventListener('resize', e => {
  let widthScreen = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;
  if (widthScreen > 991) {
    removeTranslateFromLinks(navLinks);
  }
})


function toggleActiveMenu() {
  const hamburgerContainer = document.querySelector('.navigation__hamburger-container');
  hamburgerContainer.classList.toggle('active');
  const navigationContainer = document.querySelector('.navigation__container');
  navigationContainer.classList.toggle('active');
  if(navigationContainer.classList.contains('active')) {
    showLinks(navLinks);
  } else {
    hideLinks(navLinks);
  }
}

var linksCount = 0;

function showLinks(navLinks) {        
  setTimeout(function () {  
    navLinks[linksCount].style.transform = 'translateX(0)';
    linksCount++;
    if (linksCount < navLinks.length) {   
      showLinks(navLinks);     
    } else {
      linksCount = 0;
    }
  }, 100)
}

function hideLinks(links) {
  for(let link of links) {
    link.style.transform = 'translateX(-20rem)';
  }
}

function removeTranslateFromLinks(links) {
  for (let link of links) {
    link.style.transform = 'translateX(0)';
  }
}

var formInputs = document.querySelectorAll('.form__input');
var spans = document.querySelectorAll('.registration-form__error');
var textarea = document.querySelector('.form__input-textarea');
var textareaContainer = document.querySelector('.form__textarea-container');
var form = document.querySelector('form');
var modalOverlay = document.querySelector('.modal-overlay');
var message = document.querySelector('.message');

form.addEventListener('submit', e => {
  e.preventDefault();
  if (areInputsEmpty(formInputs, spans)) return;
  modalOverlay.classList.add('active');
  let formData = new FormData(form);
  postData('includes/send-mail.inc.php', formData)
  .then(data => {
    modalOverlay.classList.remove('active');
    if(!data) {
      message.classList.add('success');
      message.innerHTML = 'Message successfully sent';
      clearInputFields(formInputs);
      setTimeout(() => { 
        message.classList.remove('success'); 
        message.innerHTML='';
      }, 500)
    }
  })
})

for(let formInput of formInputs) {
  formInput.addEventListener('focus', toggleInputAnimationAndHideErrorMessage);
  formInput.addEventListener('blur', hideInputAnimation);
}

textarea.addEventListener('input', handleTextareaHeight);
textarea.addEventListener('keyup', e => setTextareaHeightToInitial(e));


function toggleInputAnimationAndHideErrorMessage() {
  this.classList.add('active');
  hideErrorMessage(this);
}

function clearInputFields(inputs) {
  for(let input of inputs) {
    input.value = '';
    input.classList.remove('active');
  }
  restoreInitialHeightAfterSubmit();
}

function hideErrorMessage(element) {
  let container = element.parentNode;
  let span = container.querySelector('span');
  span.innerHTML = '';
}

function hideInputAnimation() {
  if(this.value.length < 1) {
    this.classList.remove('active');
  }
}

function handleTextareaHeight() {
  if (this.scrollHeight > 80) {
    this.style.height = this.scrollHeight + 'px';
    textareaContainer.style.height = this.scrollHeight + 'px';
  }
}

function setTextareaHeightToInitial(event) {
  if ((event.keyCode == 8 || event.keyCode == 46) && textarea.value.length < 1) {
    textarea.style.height = '8rem';
    textareaContainer.style.height = '8rem';
  }
}

function restoreInitialHeightAfterSubmit() {
  textarea.style.height = '8rem';
  textareaContainer.style.height = '8rem';
}


function areInputsEmpty(inputs, spans) {
  let error = 0;
  for(let i = 0; i < inputs.length; i++) {
    if(inputs[i].value.trim().length < 1) {
      spans[i].innerHTML = 'Field can\'t be empty';
      error++;
    }
  }
  return error;
}

async function postData(url, data) {
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    body: data // body data type must match "Content-Type" header
  });
  return response.json(); // parses JSON response into native JavaScript object
}

// disable zoom on mobile device
// define a function to disable zooming
var zoomDisable = function () {
  let objHead = document.querySelector('head');
  objHead.querySelector('meta[name=viewport]').remove();
  let meta = document.createElement('meta');
  meta.name = 'viewport';
  meta.content = 'width=device-width, initial-scale=1.0, user-scalable=0'
  objHead.prepend(meta);
};

// ... and another to re-enable it
var zoomEnable = function () {
  let objHead = document.querySelector('head');
  objHead.querySelector('meta[name=viewport]').remove();
  let meta = document.createElement('meta');
  meta.name = 'viewport';
  meta.content = 'width=device-width, initial-scale=1.0, user-scalable=1';
  objHead.prepend(meta);
};

// if the device is an iProduct, apply the fix whenever the users touches an input
if (navigator.userAgent.length && /iPhone|iPad|iPod/i.test(navigator.userAgent)) {
  // define as many target fields as your like 
  let inputFields = document.querySelectorAll("input, textarea");
  for (let inputField of inputFields) {
    inputField.addEventListener('touchstart', zoomDisable);
    inputField.addEventListener('touchend', () => { setTimeout(zoomEnable, 500) })
  }
}