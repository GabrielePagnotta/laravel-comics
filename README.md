## Iniziare progetto laravel 7 da zero
β
1. Aprire vs code, entrare nella cartella dove lanciare il progetto e lanciare da terminale il comando:
```composer create-project --prefer-dist laravel/laravel:^7.0 [NOME PROGETTO]```
2. Entriamo nella cartella progetto e lanciamo i comandi per creare la repository:
   1. Creare una Repository direttamente sul profilo personale di Github
   2. Aprire il terminale preferito e spostarsi nella cartella di lavoro che si vuole inizializzare come repository
   3. Utilizzare il comando ``` git init ```
   4. Poi il comando ```git add -A ```
   5. Poi il comando ```git commit -m " Testo del commit " ```
   6. Poi il comando: ```git branch -M main```
   7. Poi il comando ```git remote add origin .........URL DELLA REPO........```
   8. Poi il secondo comando ```git push -u origin main```
3. Per attivare il progetto lanciare il comando: ```php artisan serve```
β
## Clonazione Progetto Laravel GiΓ  avviato
β
1. Clonare sul pc il progetto da github
2. Apriamo il progetto con VS Code
3. Creiamo dentro il progetto un nuovo file π .env
4. Copiamo e incolliamo dentro il file π .env il contenuto di .env.example
5. Apriamo il terminale nel progetto e lanciamo il comando: ```composer install``` ( Se escono errori passiamo al comando: ```composer update``` )
6. Lanciamo poi il comando: ```php artisan key:generate```
7. Installiamo le dipendenze di Node con il comando: ```npm install```
8. Al termine possiamo attivare il server con il comando: ```php artisan serve```

------------------------------------------------------------------------------------------------------------------------------------------
##usare Blade
β
###creare un layout
Nella cartella views, creare una cartella "layout" con uno o piΓΉ file diversi in base ai layout che si vorranno creare
Per usarlo in pagina bisogna scegliere la pagina in cui inserire il layout e scrivere: ```@extends('layouts.app')```
β
##Usare i partials
Sono file che vengono inseriti in modo ripetitivo e uguale in diverse pagina come ad esempio l'header o il footer
Bisogna creare una cartella dentro views chiamandola "partials" e al suo interno realizzare i diversi partials.
Per usarli in un layout bisogna scegliere il punto in cui inserirli e il codice: ```@include('partials.nomePartials')```
β
##Usare Gli yield
Sono dei segna posto per l'inclusione di codice ripetitivo come i partials con la differenza che possono variare il loro contenuto a seconda della pagina in cui vengono usati
nel layout vengono definite le posizioni e i diversi yield
Per usarli bisogna aprire il file della pagina in cui si vogliono adottare e scrivere:
```
    @section('nomeYield')
        ...codice....
    @endsection
```
β
###Sintassi abbreviata yield
Si scrivere solo ```@section('page-title', 'Tutti i prodotti - La Molisana')```
Senza mettere dentro nessun codice html o simili e senza tag di chiusura
β
##Utilizzare SASS
Bisogna installare i pacchetti Node.js con il comando: ```npm i```
Poi bisogna lanciare il comando da terminale: ```npm run dev```
Se Γ¨ andato tutto a buon fine lanciare il comando: ```npm run watch```
β
ATTENZIONE: se ci sono continui problemi con node e l'installazione puΓ² essere che sia dovuto alla versione di Node.js nel caso conviene rimanere con la versione 16.19 scaricabile da[https://nodejs.org/download/release/v16.19.0/]
Scaricare le estensioni con .msi per windows e .pkg per Mac