<?php
$host = 'localhost';
$port = '3306';
$database = 'test';
$login = 'root';
$password = '';

$bdd = new PDO("mysql:host=$host;port=$port;dbname=$database", $login, $password);

$go = 0;
if (isset($_POST['nom'])) {
    $lastname = $_POST['nom'];
    if (isset($_POST['prenom'])) {
        $firstname=$_POST['prenom'];
        if (isset($_POST['email'])) {
            $mail=$_POST['email'];
            if (isset($_POST['message'])) {
                $message=$_POST['message'];
                $go += 1;
            }
        }
    }
}


if($go ==1){
    //ini_set('sendmail_from', 'tonmail');
    //    $to      = 'itknowledge@gmail.com';
    //    $subject = 'Contact';
    //    $headers = array(
    //        'From' => '$mail',
    //        'Reply-To' => 'webmaster@example.com',
    //        'X-Mailer' => 'PHP/' . phpversion()
    //    );
    //
    //    mail($to, $subject, $message, $headers);
    $bdd->exec("INSERT INTO test (nom, prenom, email, message) VALUES('$firstname','$lastname','$mail','$message') ");
}

?>

<div class = "container">
    <form class ="formulaire" method="post">
        <label for="nom">Nom:<br></label>
        <input title="nom" type="text" name="nom" class="input" id="nom" required><br>
        <label for="prenom">Prénom:<br></label>
        <input title="prenom" type="text" name="prenom" class="input" id="prenom" required><br>
        <label for="email">Adresse mail: <br></label>
        <input title="email" type="email" name="email" class="input" id="email" required><br>
        <label for="textarea">Faites nous parvenir vos commentaires : <br></label>
        <input title="message" type="text" name="message" class="input" id="textarea" required><br>
        <input type="submit" class="bouton">
    </form>
</div>