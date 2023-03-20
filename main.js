
// Top navigation show and hide
const nav = document.getElementById("top_navigation");
const btn = document.getElementById("reveal");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const page = document.getElementById("content");
const banner = document.getElementById("full-page");


// Arrow alignment containers from site pages
const arrowAlign = document.getElementById("arrow_alignment");

// On click this changes the top nav's display value
btn.addEventListener('click', () => {
  arrowAlign.classList.toggle('open');
  arrowAlign.style.top = "25%";
  arrowAlign.style.transition = "all .5s";
  nav.classList.toggle('is-active');
  btn.classList.toggle('hide');
  close.classList.toggle('appears');
})

close.addEventListener('click', () => {
  arrowAlign.classList.remove('open');
  arrowAlign.style.top = "3%";
  arrowAlign.style.transition = "all .5s";
  nav.style.transition = "all .5s";
  nav.classList.toggle('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
})

cross.addEventListener('click', () => {
  arrowAlign.classList.remove('open');
  arrowAlign.style.top = "3%";
  arrowAlign.style.transition = "all .5s";
  nav.style.transition = "all .5s";
  nav.classList.toggle('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
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
const writeMessage = document.getElementById("message");
const submitBtn = document.getElementById("sub_btn");
const error = document.getElementById("error");
const response = document.getElementById("response");

// messages accepts string
submitBtn.addEventListener('click', (e) => {
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
  if (writeMessage.value === '' || writeMessage == null) {
    messages.push('Please fill in the text field')
    writeMessage.style.border = "1px red solid";
  } else {
    writeMessage.style.border = "1px solid #DCDCDC";
  }

  // If  message length  >  0, prevent submit & display messages in error div
  if (messages.length > 0) {
    e.preventDefault()
    error.innerText = messages.join(', \n')
    response.innerText = "";
  } else
  { $(document).ready(function(){
    $.post("./inc/processor.php",
    {name: $('#name').val(), email: $('#email').val(),
    cc: $('#cc').val(), subject: $('#subject').val(), message: $('#message').val()},
    function(data){
      $('#response').html(data);
      }
    );
  })
  error.innerText = "";
}

})
// Function tests variable against regex format
function isEmail(i) {
  return /^([a-z\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/.test(i);
}

const closeMessage = document.getElementById("notice_close"); 
const messageWrapper = document.getElementById("alert_wrapper");

closeMessage.addEventListener('click', () => {
 messageWrapper.style.transition = "opacity 1s ease-in-out"
 messageWrapper.style.opacity = "0";
})