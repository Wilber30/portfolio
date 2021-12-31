
// Top navigation show and hide
const nav = document.getElementById("top_navigation");
const btn = document.getElementById("reveal");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const codeMain = document.getElementById("code_main");


// Arrow alignment containers from site pages
const arrowAlign = document.getElementById("arrow_alignment");

// On click this changes the top nav's display value
btn.addEventListener('click', () => {
  codeMain.style.marginTop = "0px";
  arrowAlign.classList.toggle('open');
  nav.classList.toggle('is-active');
  btn.classList.toggle('hide');
  close.classList.toggle('appears');
})

close.addEventListener('click', () => {
  codeMain.style.marginTop = "-148px";
  arrowAlign.classList.remove('open');
  nav.classList.toggle('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
})

cross.addEventListener('click', () => {
  codeMain.style.marginTop = "-148px";
  arrowAlign.classList.remove('open');
  nav.classList.remove('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
})
