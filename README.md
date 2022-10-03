# gestione-voti
Servizio Web per la gestione della raccolta di preferenze da parte di un utente su film


1 - un form in cui l’utente può inserire il titolo del film (una stringa) e la sua valutazione numerica (si può assumere un valore nell’intervallo 1-5). Il form permette l’inserimento di una valutazione per volta e l’inserimento di più valutazioni avviene inviando più volte il form.

2 - una pagina di raccolta delle valutazioni dei film che memorizza su un file .json le valutazioni fatte col form del punto 1. Si assume che se l’utente invia più di una volta una valutazione per lo stesso film, la valutazione sarà la media dei valori inseriti.

3 - una pagina di riepilogo che stampa la lista delle valutazioni, la media delle valutazioni e il film che ha ricevuto la valutazione massima. Nel caso ci siano più film a cui corrisponde il valore massimo di valutazione, si stampa il primo nella lista.

