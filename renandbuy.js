//SLIDESHOW
var slideIndex = [1, 1, 1];
var slideId = ["mySlides1", "mySlides2", "mySlides3"];
showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);

function plusSlides(n, no) {
  showSlides((slideIndex[no] += n), no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {
    slideIndex[no] = 1;
  }
  if (n < 1) {
    slideIndex[no] = x.length;
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex[no] - 1].style.display = "block";
}

//OFFERDISSAPPEAR
window.onscroll = function () {
  offer();
};

function offer() {
  if (
    document.body.scrollTop > 1000 ||
    document.documentElement.scrollTop > 1000
  ) {
    document.getElementById("offer").style.display = "none";
  } else {
    document.getElementById("offer").style.display = "block";
  }
}

const marinadub = document.getElementById("marina");
const ranchesdub = document.getElementById("ranch");
const burdub = document.getElementById("burdubai");
const filter = document.getElementById("filter");
const mainbod = document.getElementById("mainbod");

function filteropen() {
  filter.style.display = "block";
  mainbod.style.marginTop = "-70px";
}

function locations(a, b, c) {
  a.style.display = "block";
  b.style.display = "none";
  c.style.display = "none";
}

function clearfilter() {
  filter.style.display = "none";
  mainbod.style.marginTop = "123px";
  marinadub.style.display = "block";
  ranchesdub.style.display = "block";
  burdub.style.display = "block";
}

