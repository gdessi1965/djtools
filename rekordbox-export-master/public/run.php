<?php

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekordbox export audio file</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div>
<div class="form-container" style="text-align:center;"><img src="images/pngegg.png" width="300px;"></div>

<br><br>
<div class="form-container">
    <h4>DOWNLOAD E COPIA DI FILE AUDIO</h4>
    <form action="work.php" method="get">
        <label for="nome">Nome della playlist:</label>
        <input type="text" id="nome" name="nome" value="<?=$_GET['nome']?>">

        <label for="cartella">Cartella di destinazione:</label>
        <input type="text" id="cartella" name="cartella" value="<?=$_GET['cartella']?>">

        <label for="pattern">Pattern: (inizio del path dei file)</label>
        <I>es: /<b>Volumes</b>/MUSIC/Gloria Gaynor - I Will Survive.mp3</I>
        <input type="text" id="pattern" name="pattern" required value="Volumes">

        <button type="submit">Invia</button>
    </form>
</div>
</div>
</body>
</html>

