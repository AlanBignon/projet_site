<?php

?><!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title>IT Knowledge</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../affichageArticle/affichageArticle.css">
    <link rel="stylesheet" type="text/css" href="../header/projet_header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo_mobile.png" />
</head>
<body>
<?php
include ('../header/projet_header.php');
?>
<main>
    <div id="bandeau_rouge">
        <img src="../images/logo_imie.png" class="logoimie" alt="logo_imie">
        <div class="bvn">Bienvenue sur le blog IMIE</div>
    </div>
    <?php
    include ('../affichageArticle/affichageArticle.php') ?>
</main>

<?php
include ('../footer/footer.php')
?>
</body>
</html>