
// Top navigation reveal and hide

let nav = document.getElementById("top_navigation");
let btn = document.getElementById("reveal");
let close = document.getElementById("close");

btn.addEventListener('click', () => {
    nav.style.display = 'block';
    close.style.display = 'block';
    document.getElementById('page').style.marginTop = "140px";
  })

close.addEventListener('click', () => {
    nav.style.display = 'none';
    close.style.display = 'none';
    document.getElementById('page').style.marginTop = "0px";
  })

// Typewriter jQuery

  var app = document.getElementById('app');

  var typewriter = new Typewriter(app, {loop: false,});

  typewriter.typeString('My Name is William Sears').start();

// Email Validation

const name = document.getElementById("name");
const email = document.getElementById("email");
const form = document.getElementById("form");
const error = document.getElementById("error")

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null){
    messages.push('Name is required')
  }

  if (messages.length > 0) {
      e.preventDefault()
      error.innerText = messages.join(', ')
  }
})
