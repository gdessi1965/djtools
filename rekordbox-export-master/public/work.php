<?php
$nome = $_GET['nome'];
$cartella = $_GET['cartella'];
$filename = "./file/".$nome;
$diskpath = $_GET['pattern'];

$lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Espressione regolare per trovare le righe che iniziano con "/Volumes" e terminano con ".mp3"
//$pattern = '/^\/Volumes.*\.mp3$/';
$pattern = '/^\/'.$diskpath.'.*\.mp3$/';
//$pattern = '/^\/Users.*\.mp3$/';

// Filtra le righe usando la regex e salva i risultati in un array
$matchedLines = array_values(preg_grep($pattern, $lines));

// Cartella di destinazione


// Assicurati che la cartella esista

mkdir('./music/'.$cartella, 0777, true);

$destinationFolder = "./music/".$cartella."/";
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
    <div style="text-align:center;">
        <div class="form-container" style="text-align:center;"><img src="images/pngegg.png" width="300px;"></div>
    <br><br>
    <div class="list-container">
        <h2>Lista File Scaricati</h2>
        <ul>
<?php
// Scarica ogni file
foreach ($matchedLines as $fileUrl) {
    // Estrai il nome del file dall'URL
    $fileName = basename($fileUrl);

    // Percorso di destinazione locale
    $destinationPath = $destinationFolder . $fileName;

    // Scarica il file
    $fileContent = file_get_contents($fileUrl);

    // Se il download ha avuto successo, salva il file
    if ($fileContent !== false) {
        file_put_contents($destinationPath, $fileContent);
        echo "Scaricato: $fileName\n";

        echo "<br/>";
    } else {
        echo "Errore nel download di: $fileUrl\n";
    }

}

?>
        </ul>
        <?php
        echo "<br><h4>Tutti file sono nella cartella: ".$destinationFolder."</h4>\n";
        ?>
</div></div>
</body>
</html>