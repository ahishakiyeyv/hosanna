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
    <title>Ajouter un Message</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        #formul{
            border:1px solid black;
            padding:20px;
            width:350px;
            margin-left:450px;
            margin-top:80px;
            background:rgb(84,84,84);
            margin-bottom:80px;
            box-shadow:0px 2px 57px 23px rgba(0,0,0,0.58);
        }
        .h2title{
            font-family:calibri;
            font-size:30px;
            color:rgb(1,1,14);
            text-align:center;
            padding:10px;
        }
        #title{
            width:300px;
            height:30px;
            border-top:0;
            border-right:0;
            border-left:0;
            border-bottom:2px solid black;
            outline:none;
            background:transparent;
            font-size:15px;
        }
        #tex{
            width:300px;
            height:100px;
            border-top:0;
            border-right:0;
            border-left:0;
            border-bottom:2px solid black;
            outline:none;
            background:transparent;
            font-size:15px;
        }
        #datepub{
            width:300px;
            height:30px;
            border-top:0;
            border-right:0;
            border-left:0;
            border-bottom:2px solid black;
            outline:none;
            background:transparent;
            font-size:15px;
        }
        #dateexp{
            width:300px;
            height:30px;
            border-top:0;
            border-right:0;
            border-left:0;
            border-bottom:2px solid black;
            outline:none;
            background:transparent;
            font-size:15px;
        }
        #sub{
            height:30px;
            width:150px;
            background:rgb(1,1,14);
            color:ivory;
            font-size:15px;
            font-family:calibri;
        }
        #sub:hover{
            background:rgb(1,1,88);
            transition:0.5s;
        }
    </style>
</head>
<body>
    <?php
    include("menu.php");
    ?>
    <form method="post" id="formul">
        <h2 class="h2title">Ajouter un message</h2>
       <div class="boxx">
       <input type="text" name="title" id="title" placeholder="titre du message...">
       </div><br>
       <div class="boxx">
       <!-- <i class="fas fa-sms"></i> -->
       <textarea name="news" id="tex" cols="30" rows="10" placeholder="votre message..."></textarea>
       </div><br>
       <div class="boxx">
       <!-- <i class="far fa-calendar-alt"></i> -->
       <input type="date" name="datepub" id="datepub" >
       </div><br>
       <div class="boxx">
       <!-- <i class="far fa-calendar-alt"></i> -->
       <input type="date" name="dateexp" id="dateexp">
       </div><br>
       <div class="boxx">
       <input type="submit" name="envoyer" value="Ajouter" id="sub">
       </div>
    </form>
    <?php
        if(isset($_POST["envoyer"])){
            $title=$_POST["title"];
            $new=$_POST["news"];
            $datep=$_POST["datepub"];
            $datexp=$_POST["dateexp"];
            $insert=$bdd->prepare("INSERT INTO news(titre,newmessage,datepublication,dateexpiration)VALUES(?,?,?,?)");
            $insert->execute(array($title,$new,$datep,$datexp));
        }
    ?>
    <br>
    <?php
    include("footer.php");
    ?>
</body>
</html>