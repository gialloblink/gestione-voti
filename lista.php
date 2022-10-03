<?php require_once 'funzionalità.php'; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>

<body>
    <h1>Lista film</h1>

    <?php
    
    foreach ( filmManager::caricaVotiFromJson() as $key => $film): ?>
        <div>
        <?php echo("film......  ".$film["film"])?>
        <br>
        <?php echo("voto...... ".$film["media"])?>
    </div>
    <br>
    <?php endforeach; ?>

    
    <a href="index.php">vota ancora</a>
    
</body>
</html>