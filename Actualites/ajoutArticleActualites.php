<?php
$host = 'localhost';
$port = '3306';
$database = 'projet_site';
$login = 'root';
$password = '';

$bdd = new PDO("mysql:host=$host;port=$port;dbname=$database", $login, $password);
$go = 0;
if(isset($_POST['titreArticle'])) {
    $title = $_POST['titreArticle'];
    if (isset($_POST['contenuArticle'])) {
        $contenu = $_POST['contenuArticle'];
        if (isset($_POST['imgArticle'])) {
            $imgArticle = $_POST['imgArticle'];
            if (isset($_POST['categorie'])) {
                $categorie = $_POST['categorie'];
                $go += 1;
            }
        }
    }
}
if($go == 1){
    $bdd->exec("INSERT INTO articles (auteur, categorie_article, titre_article, contenu_article, img_article) VALUES ('Tintin', '$categorie', '$title', '$contenu', '$imgArticle') ");
}


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="uft-8">
    <title>IT Knowledge</title>
    <link rel="stylesheet" type="text/css" href="../accueil/style.css">
    <link rel="stylesheet" type="text/css" href="../affichageArticle/affichageArticle.css">
    <link rel="stylesheet" type="text/css" href="ajoutArticleActualites.css">
    <link rel="stylesheet" type="text/css" href="../header/projet_header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo_mobile.png" />
</head>
<body>
<?php
include ('../header/projet_header.php');
?>
<div>
    <form method="post">
        <label for="titreArticle"> Titre de l'article :</label><br>
        <input type="text" name="titreArticle" id="titreArticle" class="input" placeholder="Titre" required><br>

        <label for="categorie">Catégories de l'article : </label>
        <SELECT name="categorie" size="1" id ="categorie" required>
            <OPTION>Actualités
            <OPTION>Review
            <OPTION>Tuto
            <OPTION>Astuces
            <OPTION>Actu de l'IMIE
        </SELECT>

        <label for="contenuArticle">Contenu de l'article :</label><br>
        <textarea title="contenuArticle" name="contenuArticle" id="contenuArticle" placeholder="Contenu" required></textarea><br>

        <label for="imgArticle">Choisir une image pour présenter l'article :</label><br>
        <input type="file"
               id="imgArticle" name="imgArticle"
               required
               accept="image/png, image/jpeg"><br>
        <input type="submit" class="bouton">
    </form>
</div>