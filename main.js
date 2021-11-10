// Top navigation show and hide
const nav = document.getElementById("top_navigation");
const btn = document.getElementById("reveal");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const page = document.getElementById("content");
const banner = document.getElementById("full-page");

// On click this changes the top nav's display value
btn.addEventListener('click', () => {
  nav.style.display = 'block';
  close.style.display = 'block';
  banner.style.marginTop = "-148px";
})

close.addEventListener('click', () => {
  nav.style.display = 'none';
  close.style.display = 'none';
  banner.style.marginTop = "0px";
})

cross.addEventListener('click', () => {
  nav.style.display = 'none';
  close.style.display = 'none';
  banner.style.marginTop = "0px";
})

// On click adjusts margin-top to accomodate top nav
btn.addEventListener('click', () => {
  page.style.marginTop = "-148px";
})

close.addEventListener('click', () => {
  page.style.marginTop = "0px";
})

cross.addEventListener('click', () => {
  page.style.marginTop = "0px";
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
  }

  // If user has entered email/ else if, then compares value to regex format
  if (email.value === '' || email.value == null) {
    messages.push('Please enter an email address')
  } else if (!isEmail(email.value)) {
    messages.push('Invalid email address')
  }

  // If user has not filled in the textarea
  if (textInput.value === '' || textInput == null) {
    messages.push('Please fill in the text field')
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
