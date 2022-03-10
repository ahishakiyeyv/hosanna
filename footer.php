<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>footer</title>
</head>
<body>
    <footer>
        <div class="boxes">
            <div class="f-boxes">
                <h2 class="ttle0">Hosannah Village Hotel</h2>
                <p class="addres">Hosannah Village Hotel est un hotel situe en province de Cibitoke, C'est un hotel qui offre de nombreux service notamment l'hebergement, la restauration, et aussi les salles de conferences.</p>
                <p class="addre">22 24 43 11 <br><br>info@hvh.com <br><br><br><a class="links" href="#"><i class="fab fa-facebook-f"></i></a> | <a class="links" href="#"><i class="fab fa-twitter"></i></a>  |  <a class="links"href="#"><i class="fab fa-instagram"></i></a></p>
            </div>
            <div class="s-boxes">
                <h2 class="ttle0">Liens Rapides</h2>
                <ul class="liens">
                    <li class="l-links"><a class="q-links" href="decouvrir.php">Decouvrir</a></li>
                    <li class="l-links"><a class="q-links" href="chambres.php">Nos Chambres</a></li>
                    <li class="l-links"><a class="q-links" href="service.php">Services</a></li>
                    <li class="l-links"><a class="q-links" href="reunion.php">Reunion</a></li>
                    <li class="l-links"><a class="q-links" href="contact.php">Contact</a></li>
                    <li class="l-links"><a class="q-links" href="condition.php">Conditions Générales</a></li>
                </ul>
            </div>
            <div class="t-boxes">
                <h2 class="ttle0">Restez Informé</h2>
                <form  method="POST" class="formu">
                    <input type="email" name="email" placeholder="Votre email ici..." class="emaili"> <br><br>
                    <textarea name="message" id="texta" cols="40" rows="10" placeholder="Votre message ici..."></textarea>
                    <input type="submit" name="submit" value="Envoyer" class="subm"><i class="far fa-paper-plane"></i>
                </form>
            </div>
        </div>
        <p class="copyright">&copy 2021 | Designed by A.Yvan Igor</p>
    </footer>
    <?php
    if(isset($_POST["submit"])){
        $mail=$_POST["email"];
        $mesage=$_POST["message"];
        $insertion=$bdd->prepare("INSERT INTO abonnes(email,messages)VALUES(?,?)");
        $insertion->execute(array($mail,$mesage));
    }
    ?>
</body>
</html>