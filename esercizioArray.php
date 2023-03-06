<?php
include("library.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function stampa_doppio_array($classi, $contenuti) {
    if (count($classi) != count($contenuti)) {
        echo "errore:gli arrey non hanno la stessa dimesione";
    } 
    else { 
        // Crea un div per ogni elemento degli array
        for ($i = 0; $i < count($classi); $i++) {
            echo '<div class="' . $classi[$i] . '">' . $contenuti[$i] . '</div>';
        }
    }
}
?>
<?php
	$classi = array("blu", "verde", "blu", "verde");
	$contenuti = array("Contenuto 1", "Contenuto 2", "Contenuto 3", "Contenuto 4");
	stampa_doppio_array($classi, $contenuti);
	?>

</body>
</html>