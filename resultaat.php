<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="logo">Mad Libs</h1>
    <ul>
        <li><a href="index.html">Er heerst paniek...</a></li>
        <li><a href="onkunde.html">Onkunde</a></li>
    </ul>
    <header>
        <?php
            $ = $ = $ = $ = "";
            $huisdier = $persoon = $land = $vervelen = $speelgoed = $docent = $kopen = $bezigheid "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["huisdier"])) {
                    $huisdierError = "Vul hier iets in";
                } else {
                    $huisdier = test_input($_POST["huisdier"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$huisdier)) {
                        $huisdierError = "Only letters and white space allowed"; 
                    }
                }
            }
        ?>
        <?php
            echo "<h2>Er heerst paniek...</h2><br>";
            echo "<i>Er heerst paniek in het koningkrijk "; echo $_POST["land"]; echo ". Koning "; echo $_POST["docent"]; echo " is ten einde raad en als koning "; echo $_POST["docent"]; echo " ten einde raad is, dan roept hij zijn ten-einde-raadsheer "; echo $_POST["persoon"]; echo ".</i><br><br>";
            echo $_POST["persoon"]; echo "! Het is een ramp! Het is een schande!<br><br>";
            echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?<br><br>";
            echo "Mijn "; echo $_POST["huisdier"]; echo " verdwenen! Zo maar, zonder waarschuwing. En ik had net nog "; echo $_POST["speelgoed"]; echo " voor hem gekocht!<br><br>";
            echo "Majesteit, uw "; echo $_POST["huisdier"]; echo " komt vast vanzelf weer terug?<br><br>";
            echo "Ja da's leuk en aardig, maar hoe moet ik in de tussentijd "; echo $_POST["bezigheid"]; echo " leren?<br><br>";
            echo "Maar Sire, daar kunt u toch uw "; echo $_POST["kopen"]; echo " voor gebruiken.<br><br>";
            echo $_POST["persoon"]; echo ", je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.<br><br>";
            echo $_POST["vervelen"]; echo ", Sire."
        ?>
    </header>
    <footer>
        Copyright © 2019 - Thijs van der Ree
    </footer>
</body>
</html>