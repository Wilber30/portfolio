// Top navigation show and hide
const nav = document.getElementById("top_navigation");
const btn = document.getElementById("reveal");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const aboutPage = document.getElementById("content");


// Arrow alignment containers from site pages
const arrowAlign = document.getElementById("arrow_alignment");

// On click this changes the top nav's display value
btn.addEventListener('click', () => {
  aboutPage.style.marginTop = "0px";
  arrowAlign.classList.toggle('open');
  arrowAlign.style.top = "2%";
  arrowAlign.style.transition = "all .5s";
  nav.classList.toggle('is-active');
  btn.classList.toggle('hide');
  close.classList.toggle('appears');
})

close.addEventListener('click', () => {
  aboutPage.style.marginTop = "-148px";
  arrowAlign.classList.remove('open');
  arrowAlign.style.top = "2%";
  arrowAlign.style.transition = "all .5s";
  nav.classList.toggle('is-active');
  nav.style.transition = "all .5s";
  close.classList.remove('appears');
  btn.classList.remove('hide');
})

cross.addEventListener('click', () => {
  aboutPage.style.marginTop = "-148px";
  arrowAlign.classList.remove('open');
  arrowAlign.style.top = "2%";
  arrowAlign.style.transition = "all .5s";
  nav.classList.remove('is-active');
  nav.style.transition = "all .5s";
  close.classList.remove('appears');
  btn.classList.remove('hide');
})
