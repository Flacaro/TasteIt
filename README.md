# Taste It

Questo progetto è stato realizzato con lo scopo di aiutare il ristorante Taste It ad avere un propria applicazione web,
con l'aiuto della quale poter far conoscere i suoi prodotti a tutti coloro che amano la cucina italiana.
Gli utenti potranno facilmente ordinare i propri piatti preferiti per poterli gustare comodamente dalla propria casa.


## Tipologie di utenti

- Utenti non registrati: 
  possono avere accesso alla home per visualizzare i prodotti offerti e leggere informazioni sul ristorante,
  possono registrarsi od effettuare il login per usufruire delle funzionalità degli utenti registrati;
  
- Utenti registrati: 
  Hanno accesso a tutte le funzionalità dell'utente non registrato e in più avere accesso al proprio carrello,
  alla lista dei preferiti, effettuare e visualizzare i propri ordini. I clienti più fedeli avranno anche a
  disposizione dei coupon per avere sconti sulla spesa effettuata;

- Ristoratore:
  Gestisce i prodotti in vendita, i coupon da inviare, gli ordini effettuati;
  
## Come è strutturata

Questa applicazione è distrubuita a tre livelli (data managment, application layer e presentation layer) ed ha 
un'interfaccia responsive.

# Requisiti

- Linguaggio PHP(versione 7.1)
- DBMS: MariaDb(versione 10.4.19)
- Server Apache (versione 2.4)
- Web: HTML + CSS + Javascript

## Intallazione

Per l'installazione è necessario:
- decomprimere la cartella TasteIt ed inserirla all'interno della directory htdocs 
  oppure public_html (in questo caso bisogna, per il reindirizzamento aggiornare il
  file .htaccess con il proprio nome utente in (RewriteRule) ed indicare ad Apache 
  la directory che ospita il progetto tramite l'apposita direttiva in httpd.conf:
  
  ```bash
  <IfModule mod_userdir.c>
  UserDir public_html
  </IfModule>
  ```

- Controllare i diritti di accesso alla cartella
  In ambiente LINUX bisogna spostare la cartella in /opt/lampp/htdocs e per abilitare
  i permessi di lettura su tutta la cartella TasteIt scrivendo i seguenti comandi sul terminale: 

  ```bash
  $ sudo chmod 777 /opt/lampp/htdocs/TasteIt

  ```
  
- Per avere il database in locale bisogna scrivere sul terminale:

  ```bash
  php .\scriptDb.php name password

  ```
- Per avere tutte le dipendenze, scaricare composer su:
  [https://getcomposer.org/](Composer)
  Una volta aperto il progetto su un IDE, digitare il comando: 

  ```bash
  composer update

  ```
    
- Controllare l'abilitazione dei cookie sul proprio browser. Se non dovessero essere attivi, si verrà
  reindirizzati ad una pagina di errore.

- Per usufruire dello spazio dedicato al ristoratore, durante la login inserire queste credenziali : 
  ```bash
  email: tasteit@gmail.com
  password: secret
  ```

  
