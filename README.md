# wpboilerplate
Dette er en boilerplate for å komme raskt igang med utvikling av WordPress themes\
Den benytter seg av SCSS, moderne JS (ES6), twig-syntaks for PHP og gulp for hot reload av browser. \
Det følger også med et eksempel på hvordan man implementerer ACF som en Gutenberg-block

## Organisering
*/assets/css* Her ligger en style.css som importerer alle css-filene. Bare legg til flere importer ved behov. I disse filene kan du skrive SCSS som blir kompilert til vanlig css i style.css som ligger i rotmappa, som er fila som blir lest av WordPress.

*/assets/js* Her ligger scripts.js hvor det importeres js-filer og instansieres objekter. Dette blir kompilert med babel til scripts-bundled.js

*/views* Her ligger alle twig-view'ene, altså markupen til hver sidetype. De har php-filer med korresponderende navn i rotmappa.

### Gutenberg-block'er
*/views/block* Her legger du view'ene til ACF/Gutenberg-blocker. Følg navnkonvensjonen block-[navn-på-block].twig.\
*/inc/acf-blocks* Her definerer du nye gutenberg-blocker. Bare dupliser acf_register_block(), og bytt ut verdiene med egne.\
*/inc/block-controllers* Her ligger de korresponderende php-filene til view-filene. Benytt samme navnkonvensjon.

### Flexible-content
Som regel bruker vi flexible content som en veldig fleksibel page builder. Definer derfor først et ACF-felt av typen Flexible Content, og gi denne field name "main". Deretter lager du alle modulene dine som rows i denne.

*/views/acf* er i utgangspunktet den eneste mappen du trenger å forholde deg til. Her legger du view'ene til acf moduler som benytter et Flexible Content-field. Bruk navnekonvensjonen acf-[navn-på-modul].twig. Du kan da få tak i feltene ved å bruke {{ fields.[navn-på-field] }}. I denne mappen ligger acf-main.php, som kaller de forskjellige view'ene. Når du skal opprette nye moduler må du dupliser if-setningen i denne fila og endre til navnet på den nye modulen.



## How-to
- Opprett domene (domeneshop)

Staging: 
  - Opprette site på din hosting-tjeneste (plesk) - Notér ned credentials
  - Installer WordPress hos din host (plesk) - notere ned databasenavn, prefix, bruker og pw.

Lokalt:
  - Sett opp en lokal WP installasjon (XAMPP, Laragon, whatever)
  - Gå til wp-config og sett inn db-credentials du fikk fra Plesk.
  - Lag en mappe i wp-content/themes som du gir navnet på din theme.
  - Gå til denne mappen med en terminal og kjør git init.

Klikk "use this template" i dette repoet. Du opprett da et nytt repo med navnet på din theme.

Tilbake i terminalen lokalt, kjør\
```$ git remote add github [url til repoet du laget]```\
```$ git pull github master```

Sett opp git på Plesk. Når det er gjort legger du til denne også som remote:\
```$ git remote add plesk [url til repo]```

For å unngå å skrive credentials hver gang man pusher til plesk (usikret metode)\
```$ git config credential.helper store```\
Gjør en test-push:\
```$ git push plesk master```

Husk å legge inn ACF og Timber som plugins i WordPress

Nå kan vi installere node pakkene som kreves:\
```$ npm i```

For å kunne kjøre gulp, gå til settings.js, og legg inn din lokale url i urlToPreview.\
Deretter kan du kjøre\
```$ gulp watch```

GL HF!
