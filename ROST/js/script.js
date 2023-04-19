let scrollBool = true;
function openMenu() {
  document.getElementById("burger").classList.toggle("hidden");
  document.getElementById("burger").classList.toggle(`top-[${window.getComputedStyle(document.querySelector('#headd')).height}]`);
  document.getElementById("burgerButton1").classList.toggle("hidden");
  document.getElementById("burgerButton2").classList.toggle("hidden");
  scrollBool = !scrollBool;
}
function openNav() {
    document.getElementById('id01').style.display='block';
}
function closeNav() {
    document.getElementById('id01').style.display='none';
}

var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onscroll = function () 
{ 
  if (!scrollBool && screen.width < 1024)
  {
    window.scrollTo(0, 0); 
  }
};

