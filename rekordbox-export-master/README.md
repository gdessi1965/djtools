# Rekordbox Playlist Exporter

Uno script PHP per esportare non solo le playlist in formato `.m3u8` dall’applicazione **Rekordbox**, ma anche i file audio collegati. L’intero processo avviene tramite un’interfaccia semplice ed intuitiva e richiede un server locale per l’esecuzione.

## Funzionalità
- Importare file `.m3u8` delle playlist all’interno della cartella `file`.
- Scegliere da quale playlist esportare i file audio.
- Definire il percorso di destinazione per i file esportati.
- Scaricare automaticamente i file audio associati.

## Prerequisiti
- PHP 7.x o superiore  
- Server locale (es: [XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/), ecc.)  
- Rekordbox per la gestione delle playlist  

## Installazione
1. Clona questo repository nella tua macchina locale:  
   ```bash
   git clone https://gitlab.com/deejay-tools/rekordbox-export.git
   ```  
2. Avvia il server locale e punta alla directory del progetto.  
3. Assicurati che la cartella `file` contenga i file `.m3u8` delle playlist da cui desideri esportare i file audio.  

## Utilizzo
1. **Avvia il server locale**.  
2. **Accedi all’interfaccia web** (es: `http://localhost:8000/rekordbox-export/public`).  
3. **Seleziona una playlist** tra quelle disponibili.  
4. **Definisci il pattern del percorso dei file** audio collegati.  
5. **Scarica i file** nella cartella di destinazione scelta.  

### Operazioni principali
Una volta esportato il file della playlist in formato m3u8 da Rekordbox, posizionare questo file all'interno
della cartella di progetto denominata file.
A questo punto trovate la lista delle vostre playlist (se i file m3u8 sono più di uno), nella schermata principale
del progetto.
Cliccando su una di queste voci si aprirà un form all'interno del quale dovrete inserire il pattern del percorso
che è la prima cartella del path completo.

Esempio su MAC OS, con un disco esterno che ha label "MUSIC" il path sarà di questo tipo:
/Volumes/MUSIC
In questo caso il pattern per la regex è proprio Volumes

Verrà quindi fatto il parsing di tutti i percorsi all'interno del file m3u8 e di conseguenza il download dei file
della playlist. Il nome della cartella di destinazione all'interno della cartella /music del progetto sarà lo stesso del nome del file.

******** ENGLISH ************************************
Rekordbox Playlist Exporter
A PHP script to export not only playlists in .m3u8 format from the Rekordbox application but also the linked audio files. The entire process is done through a simple and intuitive interface and requires a local server to run.

Features
Import .m3u8 playlist files into the file folder.
Select which playlist to export audio files from.
Define the destination path for the exported files.
Automatically download associated audio files.
Prerequisites
PHP 7.x or higher
Local server (e.g., XAMPP, MAMP, etc.)
Rekordbox for playlist management
Installation
Clone this repository to your local machine:
git clone https://gitlab.com/deejay-tools/rekordbox-export.git
Start the local server and point it to the project directory.
Ensure that the file folder contains the .m3u8 playlist files from which you want to export audio files.
Usage
Start the local server.
Access the web interface (e.g., http://localhost:8000/rekordbox-export/public).
Select a playlist from the available ones.
Define the pattern for the linked audio file path.
Download the files to the chosen destination folder.
Main Operations
Once you export the playlist file in .m3u8 format from Rekordbox, place this file inside the file folder of the project. In the main project screen, you will find a list of your playlists (if there are multiple .m3u8 files). Clicking on one of these entries will open a form where you must enter the path pattern, which is the first folder of the complete path.

Example on macOS:
If you have an external drive labeled "MUSIC," the path will be something like /Volumes/MUSIC. In this case, the regex pattern is Volumes.

The script will parse all paths within the .m3u8 file and download the playlist’s files accordingly. The destination folder name inside the /music directory of the project will match the playlist file name.
*****************************************************



## Struttura del Progetto / Project structure
```
/file                # Cartella per importare i file .m3u8 delle playlist  
/music            # Cartella dove verranno salvati i file esportati  
index.php           # File principale per l’interfaccia e la logica del progetto  
```

## Screenshot


### Scelta del file m3u8
![Interfaccia principale](https://github.com/gdessi1965/djtools/blob/main/rekordbox-export-master/public/images/image1.png)
### Scelta del pattern per la regex del percorso del file
![Scelta percorso](https://github.com/gdessi1965/djtools/blob/main/rekordbox-export-master/public/images/image2.png)
### Schermata finale con i file e la cartella di destinazione
![Schermata finale](https://github.com/gdessi1965/djtools/blob/main/rekordbox-export-master/public/images/image3.png)


## Contribuire
Se vuoi contribuire al progetto, sentiti libero di fare un fork del repository e inviare una pull request!

## Licenza
Questo progetto è rilasciato sotto la licenza MIT. Consulta il file [LICENSE](LICENSE) per ulteriori dettagli.
