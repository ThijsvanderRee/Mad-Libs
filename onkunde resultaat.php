<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="all">
    <h1 class="logo">Mad Libs</h1>
    <ul>
        <li><a href="index.html">Er heerst paniek...</a></li>
        <li><a href="onkunde.html">Onkunde</a></li>
    </ul>
    <header>
        <?php
            echo "<h2>Onkunde</h2><br>";
            echo "Er zijn veel mensen die niet kunnen "; echo $_POST["kunnen"];
            echo ". Neem nou "; echo $_POST["opschieten"];
            echo ". Zelfs met de hulp van een "; echo $_POST["vakantie"]; echo " of zelfs "; echo $_POST["getal"]; echo " kan "; echo $_POST["opschieten"]; echo " niet "; echo $_POST["kunnen"];
            echo ". Dat heeft niet te maken met het gebrek aan "; echo $_POST["beste"]; echo ", maar met een te veel aan "; echo $_POST["slechtste"];
            echo ". Te veel "; echo $_POST["slechtste"]; echo " leidt tot "; echo $_POST["ergste"]; echo " en dat is niet goed als je wilt "; echo $_POST["kunnen"];
            echo ". Helaas voor "; echo $_POST["opschieten"]; echo ".";
        ?>
    </header>
    <footer>
        Copyright © 2019 - Thijs van der Ree
    </footer>
</body>
</html>