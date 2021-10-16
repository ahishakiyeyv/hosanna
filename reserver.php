<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserver</title>
    <link rel="stylesheet" href="css/reserves.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <?php
    include("menu.php");
    ?>
    <div class="container">
        <form method="POST" class="form-group">
            <div id="form">
                <h1 class="text-white text-center">Reserver Maintenant</h1>

                <div id="first-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="nom" id="input-group" placeholder="Nom...">
                    </div>

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" name="numero" id="input-group" placeholder="Telephone...">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" name="datearrive" id="input-group" placeholder="Date d'Arrivée...">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <!-- <select name="choix" id="input-group" style="background-color: black;">
                            <option value="">No.Visiteur:</option>
                            <option value="valeur1">1-5</option>
                            <option value="valeur2">6-10</option>
                            <option value="valeur3">11-20</option>
                        </select> -->
                        <input type="number" name="visiteur" id="input-group" placeholder="visiteur..." style="background-color: black;">
                    </div>

                </div>

                <div id="second-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="prenom" id="input-group" placeholder="Prenom...">
                    </div>

                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" id="input-group" placeholder="Email...">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" name="datedep" id="input-group" placeholder="Date de Depart...">
                    </div>

                    <div id="content">
                         <i class="fa fa-users" aria-hidden="true"></i>
                            <input type="radio" name="chambre" value="SIMPLE"><span style="color:ivory;">Simple</span> 
                            <input type="radio" name="chambre" value="STANDARD"><span style="color:ivory;">Standard</span> 
                            <input type="radio" name="chambre" value="VIP"><span style="color:ivory;">VIP</span> 
                            <input type="radio" name="chambre" value="APPARTEMENT"><span style="color:ivory;">Appartement</span>
                    </div>
            
                </div>

                <button type="submit" value="Submit" name="envoyer" id="submit-btn">Reserver</button>

            </div>
        </form>
        <?php
    if(isset($_POST["envoyer"])){
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $number=$_POST["numero"];
        $mail=$_POST["email"];
        $visitor=$_POST["visiteur"];
        $datearr=$_POST["datearrive"];
        $datedep=$_POST["datedep"];
       $room=$_POST["chambre"];
        $insertreservation=$bdd->prepare("INSERT INTO reservation(nom,prenom,telephone,email,visiteur,datearrive,datedepart,chambres)VALUES(?,?,?,?,?,?,?,?)");
        $insertreservation->execute(array($nom,$prenom,$number,$mail,$visitor,$datearr,$datedep,$room));
        
    }
?>
    </div>
    <br><br>
     <!-- <?php
   //include("footer.php");
    ?> -->
</body>
</html>

