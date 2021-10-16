<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7e089e6dcc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>

<body>
    <?php
        include("menu.php");
    ?>
    <article>
        <h1 class="title">Contactez Nous</h1>
        <p class="para">Des Questions ou Remarques? Contactez nous par un message</p>
        <section class="container">
            <div class="box1">
                <h3 class="title1">Information du Contact</h3>
                <p class="para1">Completez le formulaire et Nous vous répondrons dans quelques heures.</p>
                <p class="nume">
                    <i class="fas fa-phone-alt"></i>+257 79 420 759 <br><i class="fas fa-phone-alt"></i>+257 69 949 742
                    <br> <i class="fab fa-whatsapp"></i>+257 79 420 759
                </p>
                <p class="mail">
                    <i class="far fa-envelope"></i> <a class="maili" href="mailto:budigobertrandhau@gmail.com"
                        target="_blank">info@hosannah.com</a> <br>
                </p>
                <p class="addresse">
                    <i class="fas fa-map-marker-alt"></i> Cibitoke, Burundi
                </p>
                <br><br>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="box2">
                <form method="post">
                    <table>
                        <tr>
                            <th class="th">Nom:</th>
                            <th class="th">Prenom:</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="name" placeholder="Votre nom..." class="input"></td>
                            <td><input type="text" name="prenom" placeholder="Votre prenom..." class="input"></td>
                        </tr>
                        <tr>
                            <th class="th">Email:</th>
                            <th class="th">Telephone:</th>
                        </tr>
                        <tr>
                            <td><input type="email" name="mail" placeholder="Votre email..." class="input"></td>
                            <td><input type="text" name="phone" placeholder="Numero de telephone..." class="input"></td>
                        </tr> <br>
                        <tr>
                            <th class="th">Message:</th>
                        </tr>
                        <tr>
                            <td><textarea name="message" id="textarea" cols="30" rows="3"
                                    placeholder="Ecrire votre message..."></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Envoyer" name="submit"></td>
                        </tr>
                    </table>
                </form>
                <?php
                    if(isset($_POST["submit"])){
                        $nom=$_POST["name"];
                        $preno=$_POST["prenom"];
                        $mail=$_POST["mail"];
                        $telephone=$_POST["phone"];
                        if(isset($_POST["message"])){
                        $sms=$_POST["message"];
                    }
                        $insert=$bdd->prepare("INSERT INTO contact(nom,prenom,email,telephone,messages)VALUES(?,?,?,?,?)");
                        $insert->execute(array($nom,$preno,$mail,$telephone,$sms));
                    }
                ?>
            </div>
        </section>
    </article>
   <?php
   include("footer.php");
   ?>
</body>

</html>