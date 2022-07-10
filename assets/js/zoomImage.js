var imgdir = "https://foxcloud.fcosma.it/assets/img/";

function zoomImage(img) {
  window.location.replace('https://foxcloud.fcosma.it/#top');
  document.getElementById('zoomImage').style.display = "block";
  document.getElementById('zoomImageContent').src = imgdir + img;
}

function removeZoom() {
  document.getElementById('zoomImage').style.display = "none";
}
