<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Offres|HvH</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        .ttile{
            text-align:center;
            font-family:calibri;
            font-size:25px;
            letter-spacing:5px;
            text-decoration:underline;
        }
        .container11{
            border:1px solid gray;
            border-radius:20px;
            width:800px;
            margin-left:250px;
            margin-top:80px;
            margin-bottom:50px;
        }
        .title1{
            text-align:center;
            font-family:calibri;
            font-size:20px;
            color:rgb(1,1,14);
            padding:10px;
        }
        .parag{
            text-align:justify;
            font-size:18px;
            font-family:calibri;
            color:rgb(1,1,14);
            padding:10px;
        }
        .date{
            display:flex;
            justify-content:space-between;
        }
        .pdate{
            color:gray;
            font-family:helvetica;
            font-size:14px;
        }
        .linki{
            display:flex;
            justify-content:space-between;
        }
        .mod{
            border:1px solid blue;
            color:blue;
            font-size:14px;
            text-decoration:none;
            font-family:arial;
            padding:5px;
            margin:20px;
        }
        .supp{
            border:1px solid red;
            color:red;
            font-size:14px;
            text-decoration:none;
            font-family:arial;
            padding:5px;
            margin:20px;
        }
    </style>
</head>
<body>
    <?php
    include("menu.php");
    $selection=$bdd->query("SELECT * FROM news ORDER BY id_news DESC LIMIT 5");
    ?>
    <?php
    if(isset($_GET["sup"])){
        $id=$_GET["sup"];
        $delete=$bdd->exec("DELETE FROM news WHERE id_news=$id");
    }
    ?>
    <?php
    if(isset($_GET["mod"])){
        $idm=$_GET["mod"];
        $update=$bdd->query("UPDATE news WHERE id_news=$idm");
    }
    ?>
   <section>
    <h1 class="ttile">Decouvrir Nos Offres</h1>
       <div class="container11">
           <?php
            while($data=$selection->fetch()){
           ?>
           <h2 class="title1"><?php echo $data["titre"];?></h2>
           <p class="parag"><?php echo $data["newmessage"];?></p>
           <div class="date">
               <p class="pdate">Date de Publication: <?php echo $data["datepublication"];?></p>
               <p class="pdate">Date d'Expiration: <?php echo $data["dateexpiration"];?></p>
           </div>
           <!-- <div class="linki">
               <a class="mod"href="modifier.php?mod=<?php echo $data["id_news"];?>">Modifier</a>
               <a class="supp"href="offres.php?sup=<?php echo $data["id_news"];?>">Supprimer</a>
           </div> -->
           <?php
            }
           ?>
       </div>
   </section>
   <?php
   include("footer.php");
   ?>
</body>
</html>