// Top navigation show and hide
const nav = document.getElementById("top_navigation");
const btn = document.getElementById("reveal");
const close = document.getElementById("close");
const cross = document.getElementById("cross");
const scsPage = document.getElementById("page");

// Arrow alignment containers from site pages
const arrowAlign = document.getElementById("scs_arrow_align");

// On click this changes the top nav's display value
btn.addEventListener('click', () => {
  scsPage.style.marginTop = "0px";
  arrowAlign.classList.toggle('open');
  // arrowAlign.style.top = "-2%";
  nav.classList.toggle('is-active');
  btn.classList.toggle('hide');
  close.classList.toggle('appears');
})

close.addEventListener('click', () => {
  scsPage.style.marginTop = "-148px";
  arrowAlign.classList.remove('open');
  nav.classList.toggle('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
})

cross.addEventListener('click', () => {
  scsPage.style.marginTop = "-148px";
  arrowAlign.classList.remove('open');
  nav.classList.remove('is-active');
  close.classList.remove('appears');
  btn.classList.remove('hide');
})
