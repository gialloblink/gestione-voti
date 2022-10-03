<?php require_once 'funzionalità.php'; ?>
<?php 
if (array_key_exists( 'film' , $_POST )) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        
        $nuovoVoto = new filmManager; 
        $nuovoVoto -> inserireVoto($_POST['film'], $_POST['voto']);
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<div>
    <form action="index.php"  method="POST" novalidate>
        <div>
            <label for="fname">Film:</label><br>
            <input type="text" name="film">
        </div>
        <br>
        <br>
        <div>
            <label for="fname">voto:</label><br>
            <input type="number" minlength="1" maxlength="1" name="voto"> 
        </div>
        <br> 
        <button type="submit" >VOTA</button>
    </form>
    </div>
    <br>
    <?php 

    if (array_key_exists( 'film' , $_POST )):?>
    <p>
        voto effettuato
    </p>
    <?php endif?>
    <br>
    <a href="lista.php">lista voti</a>
</body>
</html>