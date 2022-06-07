#### BLOG CON CRUD

#### database
## winpty mysql -u root -p
## show database; --> andare nel .env e iniziare a settare i dati del DB

#### tabella -> migrazione
## creare la migrazione: 'php artisan make:migration create_articles_table'
## stabiliamo da cosa deve essere composto il nostro articolo
# title
# body
# img
# description

## creare il modello: 'php artisan make:model Article'
## Usiamo il Mass Assignment--> creiamo la funzione 'protected $fillable = [qui inseriamo i valori che compongono la tabella]'



#### ORM -> modello
