<!DOCTYPE html>
<html lang="nl-BE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
        $current_file_name = basename($_SERVER['PHP_SELF']);
        if ($current_file_name == "index.php"){
            echo '<title>Dashboard - Led Ball</title>';
        } elseif ($current_file_name == "game.php"){
            echo '<title>Game - Led Ball</title>';
        } elseif ($current_file_name == "view.php"){
            echo '<title>Game View - Led Ball</title>';
        }
    ?>


    <!--JQUERY-->
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.min.css" />
    <script src="script/jquery-3.2.1.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="style/reset.css" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/btns.css" />

    <!--Javascript-->
    <script src="script/app.js"></script>
    <script src="script/modernizr.custom.js"></script>

</head>
<body>
<!--MENU BAR LEFT-->
<aside>
    <div class="divLogo">
        <img class="logoLB" src="img/logoLedball.png"/>
    </div>
    <hr class="lineAside">
    <div class="divNav" >
        <ul class="nav">
            <li <?php if($current_file_name == 'index.php') {echo 'class="active"';} ?>>
                <a href="index.php">
                    <i class="material-icons md-28">home</i>
                </a>
            </li>
            <li <?php if($current_file_name == 'game.php') {echo 'class="active"';} ?>>
                <a href="game.php">
                    <i class="material-icons md-28">play_arrow</i>
                </a>
            </li>
            <li <?php if($current_file_name == 'view.php') {echo 'class="active"';} ?>>
                <a href="view.php">
                    <i class="material-icons md-28">visibility</i>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!--LOGOS & INFO-->
<header>
    <div class="headLeft">
        <?php
        $playing = true;
        if ($current_file_name == "index.php"){
            echo '<h1>Dashboard</h1>';
        } elseif ($current_file_name == "game.php"){
            echo '<h1>Start game</h1>';
        } elseif ($current_file_name == "view.php"){
            echo '<h1>Playing <span id="wait">.</span></h1>';
        } elseif ($current_file_name == "stats.php"){
            echo '<h1>Statistics</h1>';
        }
        ?>
    </div>
    <?php if ($current_file_name == "view.php") {
        echo '
        <script>
            var dots = window.setInterval( function() {
                var wait = document.getElementById("wait");
                if ( wait.innerHTML.length > 5)
                    wait.innerHTML = "";
                else
                    wait.innerHTML += ".";
            }, 250);
        </script>
        ';
    }
    ?>
    <div class="headRight">
        <img class="logoHowest" src="img/HOWEST.png"/>
    </div>
</header>