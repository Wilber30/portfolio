
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

// Expanded Image
const imageExpand = document.getElementById("expanded-image");
const originalImage = document.getElementById("database_wrapper");
const dataClose = document.getElementById("data_close");
const dataLabel = document.getElementById("data_label");

originalImage.addEventListener('click', () => {
  imageExpand.style.display = "flex";
  codeMain.classList.toggle('over');
})

dataLabel.addEventListener('click', () => {
  imageExpand.style.display = "flex";
  codeMain.classList.toggle('over');
})

codeMain.addEventListener('click', () => {
  if(codeMain.classList.toggle('over')) {
  imageExpand.style.display = "none";
  codeMain.classList.remove('over');
  }
})

dataClose.addEventListener('click', () => {
  imageExpand.style.display = "none";
  codeMain.classList.remove('over');
})

// Mouseover for border colour and font colour
dataLabel.addEventListener("mouseover", () => {
  dataLabel.style.color = "crimson";
  originalImage.style.borderColor = "crimson";
})

dataLabel.addEventListener("mouseout", () => {
  originalImage.style.borderColor = "grey";
  dataLabel.style.color = "black";
})

originalImage.addEventListener("mouseover", () => {
  originalImage.style.borderColor = "crimson";
  dataLabel.style.color = "crimson";
})

originalImage.addEventListener("mouseout", () => {
  originalImage.style.borderColor = "grey";
  dataLabel.style.color = "black";
})
