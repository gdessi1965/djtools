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
    <div class="form-container" style="text-align:center;padding-left:50px;padding-right:45px;"><img src="images/pngegg.png" width="300px;"></div>

    <br><br>
<div class="list-container">
    <h2 style="margin-left:-20px;">Elenco playlist Rekordbox in formato m3u8</h2>
    <ul>
<?php
$directory = "file/"; // Cambia con il percorso della tua cartella

// Controlla se la cartella esiste
if (is_dir($directory)) {
    // Ottiene tutti i file e le cartelle presenti
    $files = scandir($directory);

    // Filtra i file per rimuovere "." e ".."
    $files = array_diff($files, array('.', '..'));

    // Se la cartella è vuota
    if (empty($files)) {
        echo "La cartella è vuota.";
    } else {
        echo "<h4>Tutte le playlist si trovano nella cartella '$directory':</h4>";
        echo "<ul>";
        foreach ($files as $file) {
            $filenameWithoutExtension = pathinfo($file, PATHINFO_FILENAME);

            echo '<a href="run.php?nome='.$file.'&cartella='.$filenameWithoutExtension.'">'.$filenameWithoutExtension.'</a><br>';
           // echo '<a href="download.php?nome='.$file.'&cartella='.$filenameWithoutExtension.'">'.$filenameWithoutExtension.'</a><br>';
        }
        echo "</ul>";
    }
} else {
    echo "La cartella '$directory' non esiste.";
}
?>
        <br><br>
        <i>Clicca sulla playlist per copiare i file</i>
</div>
</div>
</body>
</html>
