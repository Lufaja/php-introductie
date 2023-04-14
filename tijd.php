<?php
// Stel de standaard tijdzone in om te gebruiken.
date_default_timezone_set('Europe/Amsterdam');
// Haal het huidige uur op.
$time_check = date("h");
// Haal de tijd op in het formaat uren:minuten:seconden
$time3 = date("h:i:s");
// Haal de tijd op in het formaat uren:minuten:seconden en AM/PM notatie
$date = date("h:i:s a");

// Controleer of het tijdstip in PM is.
if (preg_match('/\bpm\b/', $date)) {
    // Als het tijdstip tussen 12 uur 's middags en 6 uur 's avonds is.
    if ($time_check <= 18){
        // Stel de achtergrondafbeelding in op middag.
        $bg_img = "images/afternoon.png";
        // Stel de tekst in op "Goede Middag".
        $text = "Goede Middag";
    }else{ 
        // Stel de achtergrondafbeelding in op avond.
        $bg_img = "images/evening.png";
        // Stel de tekst in op "Goede Avond".
        $text = "Goede Avond";
    }
}else{
    // Als het tijdstip tussen 12 uur 's nachts en 6 uur 's ochtends is.
    if ($time_check <= 6){
        // Stel de achtergrondafbeelding in op nacht.
        $bg_img = "images/night.png";
        // Stel de tekst in op "Goede Nacht".
        $text = "Goede Nacht";
    }else{
        // Stel de achtergrondafbeelding in op ochtend.
        $bg_img = "images/morning.png";
        // Stel de tekst in op "Goede Morgen".
        $text = "Goede Morgen";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Begroeting</title>
    <!-- CSS -->
    <style>
        body{
        /* Stel de achtergrondafbeelding in */
        background-image: url(<?= $bg_img ?>);
        background-size: cover;
        }
        #time{
        font-size: 50px;
        font-weight: bold;
        width: fit-content;
        margin: 230px auto auto auto;
        text-align: center;
    }
    </style>
    <!-- HTML --> 
    </head>
    <body>
    <div id = "time">
        <!-- Toon de begroeting en de tijd -->
        <?= $text, $time3 ?>
    </div>
    </body>

    <script>
    setInterval(function() {
    // Deze functie wordt elke milliseconden uitgevoerd
    // Haal de huidige tijd op
    var now = new Date();
    // Werk de inhoud van het div-element bij met de huidige tijd
    document.getElementById("time").innerHTML = "<?= $text ?>" + "<br> Het is nu " + now.toLocaleTimeString();
    }, 1); // 1000 milliseconden = 1 seconde

    </script>
</html>
