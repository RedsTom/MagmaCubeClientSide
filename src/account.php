<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MagmaCube - MyAccount</title>

    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" type="text/css" href="dist/loading-bar.css"/>
    <script type="text/javascript" src="dist/loading-bar.js"></script>
</head>
<?php include "includes/nav.php"; ?>
<body>
<?php

$hour = intval(date("H")) + 1;
if (intval($hour) >= 16 || intval($hour) <= 8) {
    echo "<style>body{background-color: darkslategrey;}</style>";
} else {
    echo "<style>body{background-color: antiquewhite;}</style>";
} ?>

<div class="page">

    <?php

    for ($i = 0; $i < 100; $i++) {
        echo "<p>MyAccount<br/></p>";
    }
    ?>

</div>

</body>
</html>