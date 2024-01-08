# PHP Badwords

Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:

- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

Esecuzione del progetto:

1. Nel file index.html creo un form post per inviare dati al file wordsforbidden.php, questo conterrà tutti i dati utili per eseguire la compilazione.

2. Ho ottenuto i dati dal form, stampo nella pagina la lunghezza e usando un metodo php di una stringa chiamato str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore, sostituisco la parola da censurare con (***).