<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Fox Cloud - Un nuovo file manager</title>
  <meta name="title" content="FoxCloud">
  <meta name="description" content="Con FoxCloud potrai caricare, visualizzare e scaricare file dal web in piena sicurezza e facilità!">
  <meta name="keywords" content="FoxCloud, Federico Cosma, FedericoCosma, Fcosma, FoxCloud FCosma">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Italian">
  <meta name="revisit-after" content="3 days">
  <meta name="author" content="Federico Cosma">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="https://foxcloud.fcosma.it/assets/img/icon.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://foxcloud.fcosma.it/assets/css/main.css">
  <link rel="stylesheet" href="https://cdn.rgbcraft.com/static/fontawesome/css/all.min.css">
 </head>
 <body style="text-align: center; background: linear-gradient(#0d0d0d, #3b3a3a); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; color: white" id='body'>
  <div class="w3-bar w3-text-white">
   <a href="/" class="w3-bar-item w3-button">Home</a>
   <a href="https://foxorg.fcosma.it/#org" class="w3-bar-item w3-button">Chi Siamo</a>
   <a href="/#news" class="w3-bar-item w3-button">News</a>
   <a href="/docs/" class="w3-bar-item w3-button">Documentazione</a>
   <a href="/docs/v1.5#download" class="w3-bar-item w3-button w3-orange w3-hover-black w3-hover-text-orange w3-right">Download</a>
  </div> 
