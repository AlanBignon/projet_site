<?php

?><!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>IT Knowledge</title>
    <link rel="stylesheet" type="text/css" href="acceuil_ordi.css">
    <link rel="stylesheet" type="text/css" href="../panneau_config/panneau_config.css">
    <link rel="stylesheet" type="text/css" href="../ordi_header/projet_header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo_mobile.png" />
</head>
<body>
<?php
include ('../ordi_header/projet_header.php');
?>
<main>
    <div id="bandeau_rouge">
        <img src="../images/logo_imie.png" class="logoimie">
        <div class="bvn">Bienvenue sur le blog IMIE</div>
    </div>
    <?php
    include ('../panneau_config/panneau_config.php') ?>
    <?php //<img src="../images/imie_logo.png"> ?>
</main>

<?php
include ('../footer/footer.php')
?>
</body>
</html>