
// Top navigation show and hide
const nav = document.getElementById("top_navigation");
const btn = document.getElementById("reveal");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const page = document.getElementById("content");
const banner = document.getElementById("full-page");
const scsPage = document.getElementById("page");
const codeMain = document.getElementById("code_main");


// Arrow alignment containers from site pages
const arrowAlign = document.getElementById("arrow_alignment");
const alignScs = document.getElementById("scs_arrow_align");

//media query and IDs affected
const mediaQuery = window.matchMedia('(min-width: 576px)');
const aboutWrapper = document.getElementById("about_wrapper");
const bioParagraph = document.getElementById("biograph");


// On click this changes the top nav's display value
btn.addEventListener('click', () => {
  arrowAlign.classList.toggle('open');
  nav.classList.toggle('is-active');
  btn.classList.toggle('hide');
  close.classList.toggle('appears');
  scsPage.classList.toggle('adjust');
  close.style.transform = "translateY(400px)";
  codeMain.classList.add('top');
})

close.addEventListener('click', () => {
  arrowAlign.classList.remove('open');
  nav.classList.toggle('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
  scsPage.classList.remove('adjust');
  alignScs.classList.remove('active');
  code.classList.remove('margin');
})

cross.addEventListener('click', () => {
  arrowAlign.classList.remove('open');
  nav.classList.remove('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
  scsPage.classList.remove('adjust');
  alignScs.classList.remove('active');
  code.classList.remove('margin');
})

// On click adjusts margin-top to accomodate top nav in the about section
btn.addEventListener('click', () => {
  // Corrects layout issues for mobile devices when slide-out appears
  if (window.matchMedia("(max-width: 576px)").matches) {
  aboutWrapper.style.marginTop = "100px";
  bioParagraph.style.lineHeight = "1.4rem";
  // arrowAlign.style.top = "17%";
  arrowAlign.classList.toggle('open');
  alignScs.classList.toggle('active');
  }
})

close.addEventListener('click', () => {
  // Corrects layout issues for mobile devices when slide-out appears
  if (window.matchMedia("(max-width: 576px)").matches) {
  aboutWrapper.style.marginTop = "0px";
  bioParagraph.style.lineHeight = "1.8rem";
  // arrowAlign.style.top = "-2%";
  arrowAlign.classList.remove('open');
  alignScs.classList.remove('active');
  }
})

cross.addEventListener('click', () => {
  // Corrects layout issues for mobile devices when slide-out appears
  if (window.matchMedia("(max-width: 576px)").matches) {
  aboutWrapper.style.marginTop = "0px";
  bioParagraph.style.lineHeight = "1.8rem";
  // arrowAlign.style.top = "-2%";
  alignScs.style.top = "0%";
  }
})

btn.addEventListener('click', () => {
  // Adjusts layout up to large breakpoint when slide-out appears
  if (window.matchMedia("(min-width: 577px) and (max-width: 991px)").matches) {

  }
})

// Typewriter jQuery

var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: false,
});

typewriter.typeString('My Name is William Sears').start();

// Email Validation
const form = document.getElementById("form");
const name = document.getElementById("name");
const email = document.getElementById("email");
const cc = document.getElementById("cc").required = false;
const subject = document.getElementById("subject").required = false;
const textInput = document.getElementById("text_input");
const error = document.getElementById("error");

// messages accepts string
form.addEventListener('submit', (e) => {
  let messages = []

  // If users have not entered a value for name.
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
    name.style.border = "1px red solid";
  } else {
    name.style.border = "1px solid #DCDCDC";
  }

  // If user has entered email/ else if, then compares value to regex format
  if (email.value === '' || email.value == null) {
    messages.push('Please enter an email address')
    email.style.border = "1px red solid";
  } else {
    email.style.border = "1px solid #DCDCDC";
  }

  if (!isEmail(email.value)) {
    messages.push('Invalid email address')
    email.style.border = "1px red solid";
  } else {
    email.style.border = "1px solid #DCDCDC";
  }

  // If user has not filled in the textarea
  if (textInput.value === '' || textInput == null) {
    messages.push('Please fill in the text field')
    textInput.style.border = "1px red solid";
  } else {
    textInput.style.border = "1px solid #DCDCDC";
  }

  // If  message length  >  0, prevent submit & display messages in error div
  if (messages.length > 0) {
    e.preventDefault()
    error.innerText = messages.join(', ')
  }
})

// Function tests variable against regex format
function isEmail(i) {
  return /^([a-z\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/.test(i);
}
