<?php

function stampa_div($classe, $contenuto, $id = ""){
    echo "<div class='" . $classe . "'";
    if ($id != ""){
        echo "id = '" . $id . "'";
        
    }
    echo ">";
    echo $contenuto;
    echo "</div>";
}

function valore_assoluto($numero){
    //se il valore è negativo lo moltiplico per -1
    //altrimenti lo restituisco senza modificarlo
    if ($numero < 0){
        $risultato = $numero *-1; 
    }  else {
        $risultato = $numero;
    }

    return $risultato;
} 

function crea_div($text, $div, $evidente, $alternata) {
    for($i=0; $i < $div; $i++ ){
        if($i%2==0){
            stampa_div($alternata, $text);
        } else {
            stampa_div($evidente, $text);
        }
    }
}



function ripeti ($numero, $testo) {
    //apro il paragrafo
    echo "<p>";
    //ciclo per stampare $numero volte il contenutodi $testo
    for ($i = 0; $i < $numero; $i++){
        echo $testo . "<br>";
    }
    //chiudo il paragrafo
    echo "</p>";
}

function stampa_array($valori) {
    //ciclo sugli elementi dell'array e creo un div per ogni elemento
    for($i = 0; $i < count($valori); $i++ ){
        echo "<div>";
        echo $valori[$i];
        echo "</div>";
    }
}
 




?>

