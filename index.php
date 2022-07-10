<?php
require_once("assets/header.php");
?>
  <div id='top'>
   <br><br><br>
   <span id='mainText' class='w3-animate-top' style='font-size: 75px'><b>FoxCloud</b></span><br>
   <span id='mainSubtitle' class='w3-animate-left' style='font-size: 25px'><br>Accedi ai tuoi file d'ovunque. Senza problemi.</span>
   <br><br><br><br><br><br>
   <a href='#scopri' class='w3-animate-right' style='color: orange; font-size: 50px'><i class="fa-solid fa-circle-chevron-down"></i></a>
   <br><br>
   <hr style='width: 80%; margin: auto; height: 2px;' />
  </div>
  <div id='separatore'>
   <br><br><br><br>
  </div>
  <div id='discover'>
   <a id='scopri'>
    <div id='scopriCloud'>
     <p style='font-size: 50px'>Cosa è FoxCloud</p>
     <a onclick='zoomImage("cloud_sponsor_img_1.png")'><img src='https://foxcloud.fcosma.it/assets/img/cloud_sponsor_img_1.png' class='presentImageLeft'></a>
     <p style='font-size: 18px; text-align: left'><br><span style='font-size: 31px'><b>Facile, semplice ed intuitivo</b></span><br><b>FoxCloud</b> è un file manager online creato interamente in PHP e<br>che permette di gestire file, utenti e condivisioni in poco tempo.<br>Grazie ad un'interfaccia moderna e facile da usare gestire i tuoi file sarà veramente semplice!<br>Accedi, carica file dal computer e visualizzali e scaricali dal tuo telefono!</p><br>
    </div>
   </a>
   <div id='separatore'>
    <br><br><br><br>
   </div>
   <a id='opensource'>
    <div id='openSource'>
     <a onclick='zoomImage("cloud_sponsor_img_2.png")'><img src='https://foxcloud.fcosma.it/assets/img/cloud_sponsor_img_2.png' class='presentImageRight'></a>
     <p style='font-size: 18px; text-align: left; position: absolute; left: 50px'><br><span style='font-size: 31px'><b>Open Source</b></span><br>Noi siamo pienamente favorevoli all'Open Source, pertanto tutto il codice che forma<br>lo scheletro di FoxCloud è presente su <a href='https://github.com/FoxWorn3365/cloud'>GitHub</a> dove non solo sarà possibile visualizzare<br>il tutto ma anche contribuire segnalando errori oppure facendo pull request se siete esperti nel campo!</p><br></p><br>
     <br><br><br>
    </div>
   </a> 
  </div>
  <a id='news'>
   <div id='news' style='margin: 25px'>
    <br><br><br><br><br>
    <span id='mainText' class='w3-animate-top' style='font-size: 70px'><b>News</b></span>
    <div id='fetchingNews'>
     <i class=" w3-spin fa-solid fa-spinner"></i><br>
     <span><b>Caricamento delle notizie...</b></span>
    </div>
    <div id='news_storage_0' style='display: none'>
     <span style='font-size: 50px' id='news_storage_0_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_0_author'></span> - <span id='news_storage_0_time'></span></span><br>
     <span id='news_storage_0_content'></span>
     <br><br>
    </div>
    <div id='news_storage_1' style='display: none'>
     <span style='font-size: 50px' id='news_storage_1_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_1_author'></span> - <span id='news_storage_1_time'></span></span><br>
     <span id='news_storage_1_content'></span>
     <br><br>
    </div>
    <div id='news_storage_2' style='display: none'>
     <span style='font-size: 50px' id='news_storage_2_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_2_author'></span> - <span id='news_storage_2_time'></span></span><br>
     <span id='news_storage_2_content'></span>
     <br><br>
    </div>
    <div id='news_storage_3' style='display: none'>
     <span style='font-size: 50px' id='news_storage_3_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_3_author'></span> - <span id='news_storage_3_time'></span></span><br>
     <span id='news_storage_3_content'></span>
     <br><br>
    </div>
    <div id='news_storage_4' style='display: none'>
     <span style='font-size: 50px' id='news_storage_4_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_4_author'></span> - <span id='news_storage_4_time'></span></span><br>
     <span id='news_storage_4_content'></span>
     <br><br>
    </div>
    <div id='news_storage_5' style='display: none'>
     <span style='font-size: 50px' id='news_storage_5_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_5_author'></span> - <span id='news_storage_5_time'></span></span><br>
     <span id='news_storage_5_content'></span>
     <br><br>
    </div>
    <div id='news_storage_6' style='display: none'>
     <span style='font-size: 50px' id='news_storage_6_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_6_author'></span> - <span id='news_storage_6_time'></span></span><br>
     <span id='news_storage_6_content'></span>
     <br><br>
    </div>
    <div id='news_storage_7' style='display: none'>
     <span style='font-size: 50px' id='news_storage_7_title'></span><br>
     <span style='font-size: 25px'><span id='news_storage_7_author'></span> - <span id='news_storage_7_time'></span></span><br>
     <span id='news_storage_7_content'></span>
     <br><br>
    </div>
   </div>
  </a>
  <div id='zoomImage' class='w3-display-middle' style='display: none'>
   <a onclick='removeZoom()'><img id='zoomImageContent' style='width: 75%; height: 50%'></a>
  </div>
  <br><br>
 </body>
 <footer id='footer' class='w3-black' style='background-color: black; color: white; width: 100% height: 250px;'>
  <div style='text-align: left; margin: 10px'><a href='https://foxorg.fcosma.it/'><span style='font-size: 30px'>.FoxOrg</span></a><br>&copy; 2021 - 2022 Federico Cosma (FoxWorn3365)<br><span style='font-size: 10px'>Tutti i diritti riservati</span></div><br>
  <div id='someThings' style='position: absolute; top: 0px; right: 0px; text-align: right; margin: 10px'><a href='/chi-siamo'>Chi Siamo</a><br><a href='/progetti'>I nostri Progetti</a><br><a href='/contattaci'>Contattaci</a><br><a href='/privacy'>Privacy Policy</a>
 </footer>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src='https://foxcloud.fcosma.it/assets/js/loadChart.js'></script>
 <script src='https://foundation.fcosma.it/assets/js/http.js'></script>
 <script src='https://foxcloud.fcosma.it/assets/js/fetchNews.js'></script>
 <script src='https://foxcloud.fcosma.it/assets/js/zoomImage.js'></script>
</html>
