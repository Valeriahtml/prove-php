<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        //assegno un valore alla variabile
           $testo = "ciao mondo"; 

        //stampo il contenuto della variabile
        echo $testo;
        //su html verr� mostrato esattamente come una scritta nel body


        /*
        Assegno il valore alla variabile
        in questo caso la variabile si chiama "testo" e viene scritta sempre con il $
        il valore sar� Maramiao, quindi va scritto tra virgolette e con l'uguale perch� � appunto un valore
        */
        $testo = "Maramiao";

        /*
        Stampo il valore della variabile
        qui le virgolette vengono omesse, perch� gi� contenute nel valore della variabile
        */
        echo $testo;

        for($i=0; $i<10; $i =$i +1) {echo $testo; }
    ?>
    
</body>
</html>