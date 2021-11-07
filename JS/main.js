var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: false,
});

typewriter.typeString('My Name is William Sears')
    .start();

// click on menu at small breakpoints
// set display of of top_navigation to none
// An event listen on menu button causes top_navigation display 'block'

const topNav = document.getElementsByClassName('top_navigation').style.display = "block";
