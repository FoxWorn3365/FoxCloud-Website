<?php
require_once("assets/header.php");
?>
  <style>
  #sub {
   font-size: 16px;
   position: relative;
   left: 3%;
  }
  #tit {
    font-size: 20px;
    position: relative;
    left: 2%;
  }
 
  code {
    padding: .2em .4em;
    margin: 0;
    font-size: 85%;
    background-color: #272b33;
    border-radius: 6px;
  }

  pre {
    padding: 16px;
    overflow: auto;
    font-size: 85%;
    line-height: 1.45;
    background-color: #272b33;
    border-radius: 6px;
  }

  h1 {
   font-size: 50px;
  }
  
  h2 {
   font-size: 35px;
  }

  body {
    background-color: #0a0c10;
  }
  </style>
  <div id='navigazione' class=' w3-top w3-gray w3-text-white' style='z-index: 5; text-align: left; width: 20%; position: absolute; top: 39px;'>
   &nbsp;<span style='font-size: 30px'>Documentazione</span><br><br>
   &nbsp;&nbsp;<span id='tit'>Introduzione</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#introduzione-foxcloud' id='sub'>Cosa è FoxCloud</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#introduzione-requisiti' id='sub'>Requisiti</a><br>
   &nbsp;&nbsp;<span id='tit'>Download</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#download-github' id='sub'>Download tramite GitHub</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#download-ssh' id='sub'>Download tramite SSH</a><br>
   &nbsp;&nbsp;<span id='tit'>Preparazione</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-cartelle' id='sub'>Revisione delle Cartelle</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-utente-base' id='sub'>Creazione del primo Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-permessi' id='sub'>Permessi</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-webserver-nginx' id='sub'>Preparazione NGINX</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-webserver-other' id='sub'>Altri Web Server</a><br>
   &nbsp;&nbsp;<span id='tit'>Gestione Utenti</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-utenti-new' id='sub'>Creazione di un Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-utenti-up' id='sub'>Aggiornare un Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-utenti-del' id='sub'>Rimozione di un Utente</a><br>
   &nbsp;&nbsp;<span id='tit'>Mappa dei File</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#mappa-file' id='sub'>Mappa dei File</a><br>
    <br><br><br><br>
  </div>
  <div id='documentazione' style='text-align: left; position: absolute; left: 27%; top: 50px'>
    <h1>Introduzione</h1>
    <a id='introduzione-foxcloud'>
     <h2>Cosa è FoxCloud?</h2>
     FoxCloud è un file-manager online che ti permette di salvare i tuoi file da ogni dispositivo connesso ad internet e visualizzarli.<br>
     Il Cloud è scritto prevalentemente (99% secondo <a href='https://github.com/FoxWorn3365/Cloud'>GitHub</a>)<br>e una minima parte lato client in JavaScript per ottimizzare l'esperienza.<br><br>
    </a>
    <a id='introduzione-requisiti'>
     <h2>Requisiti minimi</h2>
     FoxCloud necessita di una versione di PHP superiore a PHP5.<br>Consiglio fortemente PHP7.4 - PHP8.0 poiché uso quelli per far andare il cloud sui miei server.<br>
     Per il Web Server invece consiglio NGINX, essendo che in questa documentazione sarà presente anche un esempio di configurazione di NGINX funzionante.<br>Se usate altri web server non saranno presenti le configurazioni ma credo che non sarà difficile crearle :D<br><br>
    </a>
    <h1>Download</h1>
    Ecco due metodi per scaricare ed usufruire di FoxCloud in pochi e semplici passi.<br>
    <a id='download-github'>
     <h2>Download tramite GitHub</h2>
     Per scaricare FoxCloud tramite GitHub bisogna aprire il terminale SSH di Linux e digitare:<br>
     <code>wget https://github.com/FoxWorn3365/Cloud/archive/refs/heads/VERSIONE.zip</code><br>
     dove <code>VERSIONE</code> è la versione che si vuole scaricare.<br>
     Per esempio, se vogliamo scaricare l'ultima versione (v1.1) faremo:<br>
     <code>wget https://github.com/FoxWorn3365/Cloud/archive/refs/heads/v1.1.zip</code><br>
     Dopo aver scaricato il file .zip contenente tutti i file di FoxCloud lo andiamo a decomprimere con <code>unzip</code>: <code>unzip v1.1.zip</code>.<br>
     <a href='#preparazione-cartelle'>Dopodichè visualizza la sezione sulla Preparazione.</a>
    </a>
    <a id='download-ssh'>
     <h2>Download tramite SH</h2>
     <span style='color: red'>Al momento l'installazione con il file <code>.sh</code> è stata sospesa ed il file rimosso essendo pericoloso ed insicuro.<br>Puntiamo a rimettere questa funzione nella v1.5<br>
    </a>
    <h1>Preparazione</h1>
    Prima di usare il Cloud dobbiamo preparare e verificare alcune cose per il corretto funzionamento.<br>
    <a id='preparazione-cartelle'>
     <h2>Preparazione delle Cartelle</h2>
     Come prima cosa bisogna assicurarsi che tutte le cartelle siano presenti e non siano vuote.<br>
     Controllare se sono presenti tutte le directory elencate in <a href='#mappa-dir'>questo paragrafo</a>.
    </a>
    <a id='preparazione-utente-base'>
     <h2>Preparazione dell'Utente base</h2>
     Per prima cosa andiamo a creare l'utente default.<br>
     Nella directory <code>protected/users/</code> andiamo a creare la directory <code>dir</code> dove dir è il nome dell'utente.<br>
     In questa directory andiamo a creare poi il file <code>userinfo.conf</code> dove ci saranno in formato <code>.json</code><br>
     tutte le impostazioni e le preferenze globali dell'utente, che però, non può modificare.<br>
     Ecco un esempio di configurazione:<br>
     <pre>
{
  "name":"Nome",
  "surname":"Cognome",
  "email":"Indirizzo email",
  "diskSpace":10,
  "firstLogin":"1643578465",
  "isVisible":true,
  "dir":"diskNumber140"
} 
      </pre><br>
      Ora analizziamo bene le varie variabili:
      <h3><code>name</code></h3>
      Tipo: <code>string</code><br>
      Nullabile: <code>NO</code><br>
      Il nome proprio della persona a cui è stato intestato l'account.
      <h3><code>surname</code></h3>
      Tipo: <code>string</code><br>
      Nullabile: <code>NO</code><br>
      Il cognome della persona a cui è stato intestato l'account.
      <h3><code>email</code></h3>
      Tipo: <code>string</code><br>
      Nullabile: <code>NO</code><br>
      L'email dell'intestatario.<br>In questa versione non ha un utilizzo ma dalla v1.5 potrebbe.
      <h3><code>diskSpace</code></h3>
      Tipo: <code>INT (number)</code> (in <code>GB</code>)<br>
      Nullabile: <code>NO</code><br>
      Lo spazio dedicato all'utente.<br>Non potrà andare sopra di quello.
      <h3><code>firstLogin</code></h3>
      Tipo: <code>INT (number)</code><br>
      Nullabile: <code>NO</code><br>
      La data in UNIX di quando è stato creato l'account.
      <h3><code>isVisible</code></h3>
      Tipo: <code>boolean</code><br>
      Nullabile: <code>NO</code><br>
      Dalla versione v1.5 provvede a rendere visibile o meno l'account se si va all'url<br>
      <code>https://cloud.tuodominio.it/u/ACCOUNT</code>.
      <h3><code>dir</code></h3>
      Tipo: <code>string</code><br>
      Nullabile: <code>NO</code><br>
      Il nome del "disco" (directory) in cui verranno salvati i file dell'utente.<br>
      Deve esistere nella directory <code>protected/disk/</code>.<br>
     </a>
     <a id='preparazione-permessi'>
      <h2>Permessi</h2>
      Ora dobbiamo sistemare i permessi delle cartelle.<br>
      Per evitare falle di sicurezza spaziali <code style='color: red'>non usare mai <b>0777</b></code>
      Provvediamo ad andare nella directory del sito con <code>cd directory/del/sito</code><br>
      Ora con sudo impostiamo i permessi.<br>
      <code>sudo chmod 0770 protected/</code> e <code>sudo chown 0770 protected/</code>.
     </a>
     <a id='preparazione-webserver-nginx'>
      <h2>Preparazione di NGINX</h2>
      Ora provvediamo a configurare NGINX per far funzionare correttamente il cloud.<br>
      Nella directory <code>/etc/nginx/sites-available/</code> creiamo il file <code>cloud.conf</code><br>
      Esempio:<br>
      <pre>
server {

       listen 80;

        root /var/www/cloud;
        index index.php;

        server_name cloud.tuodominio.it;

        error_page 404 /404.php;

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.0-fpm.sock;
    }

    location / {
        try_files $uri $uri.html $uri/ @extensionless-php;
        index  index.php index.html;
    }

    location /protected/ {
        deny all;
    }

    location ~ \.php$ {
        try_files $uri =404;
    }

    location @extensionless-php {
        rewrite ^(.*)$ $1.php last;
    }
}
    </pre>
   </a>
   <a id='preparazione-webserver-other'>
    <h2>Preparazione di altri Web Server</h2>
    Al momento non disponiamo delle altre configurazioni.
   </a>
   <h1>Gestione utenti</h1>
   <a id='gestione-utenti-new'>
    <h2>Creazione di un Utente</h2>
    Per creare un utente dovremo andare a creare delle cartelle.<br>Iniziamo creando la cartella base dell'utente in:
    <code>protected/users/[NOME UTENTE]/</code>.<br>
    Dopodichè andiamo a creare in questa cartella il file <code>userinfo.conf</code>, un file in <code>JSON</code> che conterrà le configurazioni varie.<br>
    Per creare il file, seguire questo esempio modificando i vari valori:<br>
    <pre>
{
  "name":"Nome",
  "surname":"Cognome",
  "email":"Indirizzo email",
  "diskSpace":10,
  "firstLogin":"1643578465",
  "isVisible":true,
  "dir":"diskNumber140"
} 
   </pre>
   Ora, andiamo a creare una directory in <code>protected/disk/</code> dove il nome della directory deve essere uguale al valore<br>
   <code>dir</code> nel file di configurazione, in questo caso <code>protected/disk/diskNumber140/</code><br>
   Prima di proseguire, verifica che i <a href='#preparazione-permessi'>permessi</a> siano configurati a dovere.<br>
   Ora, per impostare una password all'account, basterà andare alla pagina di login (<code>/login</code>) e come username<br>
   inserire il nome utente scelto e come password lasciare vuoto / mettere qualcosa a caso.<br>
   Il Cloud vi farà in automatico inserire una password che verrà criptata in <code>sha512</code>.<br>
  </a>
  <a id='gestione-utenti-up'>
   <h2>Aggiornare un Utente</h2>
   Per modificare qualcosa relativo ad un utente basterà andare a modificare il suo file di configurazione siutato in <code>protected/users/[USERNAME]/userinfo.conf</code>.<br><br>
  </a>
  <a id='gestione-utenti-del'>
   <h2>Rimozione di un Utente</h2>
   Il concetto di rimozione di un Utente è generico, pertanto verrà suddiviso in due diverse categorie.<br>
   <h3>Bloccare l'accesso</h3>
   Per bloccare l'accesso all'utente basterà andare ad inserire <code>0</code> nel file <code>protected/users/[USER NAME]/userpass.conf</code>.<br>
   <h3>Eliminazione dei file</h3>
   Per eliminare tutti i file di un utente basterà andare ad eliminare la cartella indicata sotto il valore <code>dir</code><br>
   nel file di configurazione dell'utente situato in <code>protected/users/[USER NAME]/userinfo.conf</code>.<br><br>
  </a>
  <h1>Mappa dei File</h1>
  <a id='mappa-file'>
  </a>
  <br><br><br><br><br><br>
  </div>
  <div id='goTop' class='w3-bottom w3-display-bottom' style='display: none; text-align: left'>
   <a href='#top'><button class='w3-button'><i class="fa-solid fa-circle-arrow-up"></i></button></a>
  </div>
  <br><br><br><br><br><br><br>
 </body>
 <script>
 document.body.onload = function() {
   document.getElementById('body').style.background = "#0a0c10";
   document.getElementById('body').style.backgroundColor = "#0a0c10";
   document.getElementById('navigazione').style.height = document.getElementById('documentazione').offsetHeight + "px";
   console.log("Impostata l'altezza della navbar a " + document.getElementById('documentazione').offsetHeight + "px");
 }

 window.onscroll = function() {
   if (document.documentElement.scrollTop > 50) {
     console.log("A");
     document.getElementById('goTop').style.display = "block";
   }
 } 
 </script>
</html>
  