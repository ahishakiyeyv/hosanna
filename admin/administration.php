<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/administration.css">
    <title>Administration</title>
</head>
<body>
    <?php
    include("menu.php");
    $select=$bdd->query("SELECT *,COUNT(email) AS nbre FROM utilisateur");
    $datas=$select->fetch();
    ?>
  <section>
      <div class="container0">
         <div class="containp">
             <div class="contain_img">
                    <img src="images/_495.jpg" alt="images non disponible" class="img_ad">
             </div>
             <div class="contain_txt">
                <h2 class="ttle">BARUTWANAYO Eddy Grant</h2>
                <p class="para">Gérant et Administrateur</p>
             </div>
         </div>
         <div class="contain_menu">
             <ul class="ull">
                 <li class="liii"><a class="linki" href="ajouterutilisateur.php"><i class="fas fa-users-cog"></i>      Utilisateur</a></li>
                 <li class="liii"><a class="linki" href="abonnes.php"><i class="fas fa-user-check"></i>      Abonnés aux NewsLetters</a></li>
                 <li class="liii"><a class="linki" href="ajoutermessage.php"><i class="fas fa-plus"></i>       Ajouter un Message</a></li>
                 <li class="liii"><a class="linki" href="recup_contact.php"><i class="far fa-id-card"></i>       Contact</a></li>
                 <li class="liii"><a class="linki" href="recuperationreservation.php"><i class="fas fa-person-booth"></i>         Reservation</a></li>
             </ul>
         </div>
        </div>
        <div class="container1">
            <h1 class="titlep">Voir les statistiques ici</h1>
            <div class="contain_1">
                <div class="contain_l">

                    <p><?php echo $datas["nbre"];?><br><i class="fas fa-users"></i></p>
                    
                </div>
                <div class="contain_r">
                    <?php
                    $selection=$bdd->query("SELECT *, COUNT(email) AS nbre FROM abonnes");
                $dataselection=$selection->fetch();
                    ?>
                    <p><?php echo $dataselection["nbre"];?><br><i class="fas fa-user-check"></i></p>
                    
                </div>
            </div>
            <div class="contain_2">
                <div class="contain_01">
                    <?php 
                    $selecting=$bdd->query("SELECT *,COUNT(nom) AS nombre FROM reservation");
                    $dataselecting=$selecting->fetch();
                    ?>
                    <p><?php echo $dataselecting["nombre"];?><br>Booked</p>
                </div>
                <div class="contain_02">
                <?php 
                    $selec=$bdd->query("SELECT *,COUNT(messages) AS nombre FROM contact");
                    $datasel=$selec->fetch();
                    ?>
                    <p><?php echo $datasel["nombre"];?><br>SMS</p>
                </div>
            </div>
        </div>
  </section>
  <?php
  include("footer.php");
  ?>
</body>
</html>