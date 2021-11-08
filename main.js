


let nav = document.getElementById("top_navigation");
let btn = document.getElementById("reveal");
let close = document.getElementById("close");

btn.addEventListener('click', () => {
    nav.style.display = 'block';
    close.style.display = 'block';
  })

close.addEventListener('click', () => {
    nav.style.display = 'none';
    close.style.display = 'none';
  })

  var app = document.getElementById('app');

    var typewriter = new Typewriter(app, {loop: false,});

    typewriter.typeString('My Name is William Sears').start();
