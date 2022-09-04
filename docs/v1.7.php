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
   &nbsp;&nbsp;<span id='tit'>Preparazione</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-cartelle' id='sub'>Revisione delle Cartelle</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-utente-base' id='sub'>Creazione del primo Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-permessi' id='sub'>Permessi</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-admin' id='sub'>Configurazione Admin</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-webserver-nginx' id='sub'>Preparazione NGINX</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#preparazione-webserver-other' id='sub'>Altri Web Server</a><br>
   &nbsp;&nbsp;<span id='tit'>Pannello Admin</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-admin-login' id='sub'>Accedere al pannello</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-admin-new' id='sub'>Creare un Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-admin-up' id='sub'>Aggiornare un Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-admin-del' id='sub'>Rimuovere un Utente</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#gestione-admin-ban' id='sub'>Sospendere un Utente</a><br>
   &nbsp;&nbsp;<span id='tit'>Plugins</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#plugins-preparazione' id='sub'>Preparazione ai Plugin</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#plugins-install' id='sub'>Installazione di un Plugin</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#plugins-config' id='sub'>Configurazione di un Plugin</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#plugins-configurazione-globale' id='sub'>Configurazione dei Plugin</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#plugins-enable' id='sub'>Attivazione di un Plugin</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#plugins-new' id='sub'>Creazione di un Plugin</a><br>
   &nbsp;&nbsp;<span id='tit'>Mappa dei File</span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href='#mapp-file' id='sub'>Mappa dei File</a><br>
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
     <span style='color: red'>Al momento l'installazione con il file <code>.sh</code> è stata sospesa ed il file rimosso essendo pericoloso ed insicuro.<br>Puntiamo a rimettere questa funzione nella v1.8<br>
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
     Per prima cosa andiamo a creare il primo utente del Cloud.<br>
     Nella directory <code>protected/users/</code> andiamo a creare la directory <code>dir</code> dove dir è il nome dell'utente.<br>
     Quindi se vogliamo creare l'utente <code>mario</code> andiremo a creare la directory <code>protected/users/mario/</code>.<br>
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
      <code>sudo chmod -R 0770 protected/</code> e <code>sudo chown -R www-data protected/</code>.
     </a>
     <a id='preparazione-admin'>
      <h2>Configurazione Admin</h2>
      Provvediamo a creare l'utente admin da cui sarà possibile gestire tutto il cloud.<br>
      Come prima cosa andiamo a creare (oppure a modificare) il file <code>config.json</code> in <code>protected/config/config.json</code>.
      Ecco un esempio:<br>
      <pre>
{
   "admin_username":"root",
   "admin_password":"latuapassword"
}
      </pre>
      Nel campo <code>admin_username</code> ci andrà l'username scelto mentre nel campo <code>admin_password</code> ci andrà la password dell'account admin.<br>
      <a href='#gestione-admin-login'>Guarda come accedere al Pannello Admin</a>
     </a>
     <a id='preparazione-webserver-nginx'>
      <h2>Preparazione di NGINX</h2>
      Ora provvediamo a configurare NGINX per far funzionare correttamente il cloud.<br>
      Nella directory <code>/etc/nginx/sites-available/</code> creiamo il file <code>cloud.conf</code><br>
      Esempio:<br>
      <pre>
server {

        root /var/www/cloud;
        index index.php;

        server_name cloud.fcosma.it;

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.0-fpm.sock;
    }

    location / {
        try_files $uri $uri.html $uri/ @extensionless-php;
        index  index.php index.html;
    }

    location ^~ /protected/ {
        deny all;
        return 403;
    }

    location /u/ {
       try_files $uri /route.php;
    }

    location /s/ {
       try_files $uri /route.php;
    }

    location /admin/ {
       try_files $uri /route.php;
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
   <h1>Pannello Admin</h1>
   <a id='gestione-admin-login'>
    <h2>Accedere al Pannello</h2>
    Per accedere al pannello Admin basterà andare all'url <code>https://cloud.example.com/admin/</code> ed inserire i valori precedentemente sistemati nel file <a href='#preparazione-admin'><code>protected/config/config.json</code></a>
  </a>
  <a id='gestione-admin-new'>
   <h2>Creazione di un Utente</h2>
   Per creare un utente tramite il pannello basterà premere il bottone (<button class='w3-button w3-text-white w3-green'><i class="fa-solid fa-circle-plus"></i></button>).<br>
   Dopo questo in una schermata tramite il nostro editor del file Json potrete impostare tutti i parametri, seguendo <a href='#preparazione-utente-base'>il primo esempio</a>.<br>
  </a>
  <a id='gestione-admin-up'>
   <h2>Aggiornamento di un Utente</h2>
   Per aggiornare un utente tramite l'interfaccia Admin, basta premere l'icona per editare (<i class="fa-solid fa-pen-to-square"></i>)<br>
   nella stessa linea della tabella dove è presente l'utente.<br>
   Dopo questo in una schermata tramite il nostro editor del file Json potrete impostare tutti i parametri, seguendo <a href='#preparazione-utente-base'>il primo esempio</a>.<br>
  </a>
  <a id='gestione-admin-del'>
   <h2>Eliminazione di un Utente</h2>
   Per eliminare un utente tramite l'interfaccia Admin, basta premere l'icona del bidone (<i class="fa-solid fa-trash"></i>)<br>
   nella stessa linea della tabella dove è presente l'utente per andare ad una pagina dove vi chiederà la conferma.<br>
  </a>
  <a id='gestione-admin-ban'>
   <h2>Sospendere un Utente</h2>
   In questa nuova versione (<code>v1.5</code>) è finalmente possibile sospendere l'accesso ad uno o più utenti senza eliminare la loro cartella.<br>
   Per farlo batserà premere l'icona del ban hammer (martello) (<i class="fa-solid fa-hammer"></i>) in corrispondenza al nome dell'utente.<br>
   Dopo averlo premuto, oltre a comparire un div in alto che vi conferma il tutto, l'icona dovrebbe cambiare in un tasto play.<br>
   Per unbannare l'utente basterà premere sull'icona "play".<br>
  </a>
  <h1>Plugins</h1>
  <a id='plugins-preparazione'>
   <h2>Preparazione alla funzione Plugin</h2>
   Prima di procedere con l'installazione di un plugin configuriamo correttamente i vari parametri.<br>
   Nel file <code>route.php</code> andiamo a prendere e modificare a nostro piacere questo pezzo:<br>
   <pre>
// +--------------------------------+
// |         Plugin Manager         |
// +--------------------------------+
// | (C) 2021 - 2022 .FoxOrg        |
// | https://foxcloud.fcosma.it     |
// | Rilasciato sotto GPL 3.0       |
// +--------------------------------+
// | Plugin Loader                  |
require_once("protected/components/plugin.php");
// +--------------------------------+
use FoxCloud as Cloud;

// Inizializziamo gli array globali
$GLOBALS['pluginLoadBefore'] = array();
$GLOBALS['pluginLoadAfter'] = array();

// Salvo le informazioni globali
$GLOBALS['url'] = $url;

$plugins = new Cloud\Plugins();
$plugins->setPluginsFolder("plugins");
$plugins->definePluginConfigDirectory("config/plugin_config.json");
$plugins->load();

// Carico i plugin
$plugins->execute();
   </pre>
   Ma attenti! Se non sapete cosa state facendo non andate a modificare questa parte: potreste "rompere" tutto!<br><vr>
   Ora andiamo a vedere nel dettaglio i valori che ci interessano:<br>
   <h3><code>$plugins->setPluginsFolder("plugins");</code></h3>
   Bisogna impostare una directory per i plugin.<br>
   Con questa configurazione andrà a cercare nella cartella <code>protected/plugins/</code>,<br>
   ma se per esempio vogliamo metterli in una cartella in <code>components</code> basterà mettere:<br>
   <code>$plugins->setPluginsFolder("components/plugins");</code>.
   <br><br>
   <h3><code>$plugins->definePluginConfigDirectory("config/plugin_config.json");</code></h3>
   Tramite questa funzione si va a definire la directory dove è presente il file di configurazione<br>
   per gestire in modo efficente i vari plugin.<br>
   In questo modo va a prenderlo in <code>protected/config/plugin_config.json</code> ma se lo volessimo mettere<br>
   nella cartella <code>protected</code> e basta si andrebbe a fare: <code>$plugins->definePluginConfigDirectory("plugin_config.json");</code>.<br>
   Non può essere nullato.<br><br>
  </a>
  <a id='plugins-install'>
   <h2>Installazione di un Plugin</h2>
   I plugin vengono distribuiti in comodi e compatti file <code>.phar</code>.<br>
   Pertanto se plugin enormi sono in un solo file non spaventatevi, anche se è stato un inferno integrare questa funzione.<br>
   Quando si possiede il file <code>.phar</code> di un plugin, per esempio <code>betterCloud.phar</code> lo si deve andare a mettere<br>
   nella <a href='#plugins-preparazione'>directory dei plugin definita in precedenza</a>, in modo che venga caricato.<br>
  </a>
  <a id='plugins-config'>
   <h2>Configurazione di un Plugin</h2>
   Tutti i file che un plugin genera sono solitamente nelle directory <code>protected/plugins/configs/[PLUGIN-NAME]/</code>,<br>
   <code>protected/sys/[PLUGIN-NAME]/</code> oppure <code>protected/config/[PLUGIN-NAME].conf.json</code>.<br>
   Non tutti i file possiedono un file di configurazione oppure devono essere confiugrati tramite classi.<br>
   Se i plugin non sono ufficiali non rispondiamo ad eventuali domande sulla configurazione.<br>
  </a>
  <a id='plugins-configurazione-globale'>
   <h2>Configurazione globale dei Plugin</h2>
   Offriamo insieme al sistema dei plugin anche un sistema di configurazione globale dei plugin.<br>
   E' situata nella directory indicata <a href='#plugins-preparazione'>nel file <code>route.php</code></a> ed è in <code>json</code>.<br>
   Andiamo ora ad analizzarlo con un esempio:<br>
   <pre>
{
  "isEnabled":true,
  "restricted":true,
  "load": [
     "myPlugin.phar"
  ]
}
   </pre>
   Ora analizziamo valore per valore:
   <h3><code>isEnabled</code></h3>
   <b>Tipo: <code>boolean</code></b><br>
   <b>Nullabile: <u>NO</u></b><br>
   Questo booleano indica se la funzione dei plugin è attiva.<br>
   In caso non si vogliano usare i plugin basta metterlo su <code>false</code> e non verranno neanche inizializzati.<br>
   <br>
   <h3><code>restricted</code></h3>
   <b>Tipo: <code>boolean</code></b><br>
   <b>Nullabule: <u>NO</u></b><br>
   Questo booleano definisce se si devono caricare tutti i plugin oppure solo alcuni.<br>
   Quando è su <code>false</code> vengono caricati tutti i plugin attivi nella directory dei plugin, mentre<br>
   quando è su <code>true</code> vengono caricati solo i plugin elencati nel parametro <code>load</code>.<br>
   <b>ATTENZIONE!</b> Se si inserisce il nome di un plugin non presente non verrà caricato nessun plugin, neanche quelli presenti!<br>
   Inoltre deve essere presente anche l'estesione, quindi se voglio caricare il plugin <code>ciao</code>, <code>betterCloud</code> e <code>securityGood</code> devo mettere:<br>
   <pre>
{
  "isEnabled":true,
  "restricted":true,
  "load": [
    "ciao.phar",
    "betterCloud.phar",
    "securityGood.phar"
  ]
}
   </pre>
  </a>
  <a id='plugins-enable'>
   <h2>Attivazione / Inclusione di un Plugin</h2>
   E' possibile attivare ed includere un plugin anche al di fuori del caricamento principale.<br>
   Basterà nella sezione corretta inserire:<br>
   <pre>
$plugins->loadPlugin([PLUGIN-NAME]);  // Esempio: $plugins->loadPlugin('betterCloud.phar');
   </pre>
  </a>
  <a id='plugins-new'>
   <h2>Creazione di un Plugin</h2>
   Creare un plugin è complesso, pertanto questa guida proverà ad essere dettagliata.<br>
   <a id='plugins-new-mappa-file'>
    <h3>Mappatura dei file di un Plugin</h3>
    Innanzitutto spieghiamo bene come deve essere formato un plugin per il Cloud con questa mappa:<br>
    <pre>
 - main.php     -> File principale, richiede la classe dei plugins di FoxCloud ed include gli altri file
 - src/ilmioplugin.php -> File principale del plugin, contiene l'intero codice sotto eventi
 - config.json    -> Configurazione che definisce le principali caratteristiche di un plugin.
    </pre>
    <h4><code>main.php</code></h4>
    Questo file ha il compito di caricare la classe principale dei plugins di FoxCloud ed includere gli altri file.<br>
    Lascio un esempio del file:<br>
    <pre>
&lt;?php
$plugin = new FoxCloud\Plugins();

require_once("src/ilmioplugin.php");
    </pre>
    <br><br>
    <h4><code>src/ilmioplugin.php</code></h4>
    File che contengono l'essenza del plugin.<br><br>
    <h4><code>config.json</code></h4>
    File molto importante che contiene l'identità del plugin, le varie proprietà ecc ecc.<br>
    <a href='#plugins-new-config'>Viene spiegata meglio qua</a>.<br><br>
   </a>
   <a id='plugins-new-config'>
    <h3>File di configurazione di un Plugin</h3>
    Questo file rappresenta proprio una carta d'identità per il plugin, lo descrive nei minimi dettagli e da parametri fondamentali.<br>
    Ora ecco un esempio del file:<br>
    <pre>
{
   "author":"FoxWorn3365",
   "contributors":"FoxWorn3365, pipoGiallo22, Dio",
   "name":"Test",
   "project_namespace":"FoxWorn3365.FoxCloudPlugins.TestPlugin",
   "description":"Questo plugin è di test, niente di particolare :(",
   "version":"0.2",
   "enabled":true,
   "phpVersion":"7.4",
   "compatibility":{
      "cloudVersions":[
         "1.0",
         "1.1",
         "1.5"
      ],
   },
   "type":"phar_plugin"
}
    </pre>
    <h4><code>author</code></h4>
    <b>Type:</b> <code>string</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Indica l'autore principale del plugin.<br><br>
    <h4><code>contributors</code></h4>
    <b>Type:</b> <code>string</code><br>
    <b>Nullable:</b> <u>SI</u><br>
    Indica le varie persone che hanno contribuito al plugin.<br><br>
    <h4><code>name</code></h4>
    <b>Type:</b> <code>string</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Nome del plugin.<br><br>
    <h4><code>project_namespace</code></h4>
    <b>Type:</b> <code>string/namespace</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Indica un'informazione che verrà usata nel debug e nella gestione dei plugin.<br><br>
    <h4><code>description</code></h4>
    <b>Type:</b> <code>string</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Una breve descrizione del plugin, cosa fa ecc ecc...<br><br>
    <h4><code>version</code></h4>
    <b>Type:</b> <code>string/number</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Una stringa o numero che indica la versione del plugin.<br><br>
    <h4><code>enabled</code></h4>
    <b>Type:</b> <code>boolean</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Indica se il plugin deve essere caricato oppure no.<br><br>
    <h4><code>phpVersion</code></h4>
    <b>Type:</b> <code>string</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Indica la versione di PHP designata per il plugin.<br><br>
    <h4><code>compatibility</code></h4>
    <b>Type:</b> <code>ARRAY</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Indica alcune informazioni di compatibilità.<br><br>
    <h4><code>compatibility->cloudVersions</code></h4>
    <b>Type:</b> <code>ARRAY</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    La lista di tutte le versioni di FoxCloud dove il plugin può funzionare.<br><br>
    <h4><code>type</code></h4>
    <b>Type:</b> <code>string</code><br>
    <b>Nullable:</b> <u>NO</u><br>
    Indica il tipo di plugin, per ora l'unico è <code>phar_plugin</code><br><br>
   </a>
   <a id='plugins-events'>
    <h2>Eventi dei Plugin</h2>
    FoxCloud si basa principalmente, per il caricamento dei plugin, su eventi backend.
    Quindi anziché limitare TUTTO il plugin ad un solo evento (tipo dopo il caricamento della pagina), cosa che avveniva<br>
    nella <a href='/docs/v1.5#plugins'>v1.5</a> abbiamo deciso di rendere un plugin multi-evento.<br>
    Questi sono tutti gli eventi al momento implementati:<br>
    <h3><code>pageLoad</code></h3>
     <h4>before - after</h4>
     <pre>
$plugin->addEvent('pageLoad', 'before', function() {
  echo "ma che bello il mio plugin che carica prima di tuttiii";
});
     </pre>
     <br>
     <h3><code>request</code></h3>
      <h4>before - after</h4>
       <h5>PARAMS (ARRAY)</h5>
       <pre>
$plugin->addEvent('request', 'after', function() {
  echo "OH NO l'URL è CAMBIATO MA VEDRAI QUESTO SOLO SE è UGUALE A /u/FoxWorn3365/lol!";
}, array('/u/FoxWorn3365/lol'));
       </pre>
   </a>
   <a id='plugins-new-phar'>
    <h3>Compressione di un Plugin</h3>
    Per poter distribuire un plugin è necessario comprimerlo.<br>
    Infatti, ecco a voi un piccolo spunto per creare un archivio <code>.phar</code>:<br>
    <pre>
&lt;?php
$name = $argv[1];
$dir = $argv[2];

$phar = new Phar($name);
$phar->buildFromDirectory($dir);
$phar->setDefaultStub('main.php', '/main.php');
    </pre>
    Ora, per andare a creare il plugin che è nella cartella <code>testPlugin/</code> andremo a fare:<br>
    <code>php new.php myPlugin.phar testPlugin/</code>
   </a>
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
