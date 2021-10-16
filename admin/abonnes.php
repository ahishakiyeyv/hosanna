<?php
include("database.php")
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Abonnes</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        .title{
            font-size:30px;
            font-family:helvetica;
            color:rgb(14,14,46);
            text-align:center;
            letter-spacing:8px;
        }
        .container01{
            display:flex;
            flex-direction:column;
            margin-top:100px;
            border:1px solid gray;
            box-shadow:1px -1px 24px 13px rgba(4,17,29,0.17);
            border-radius:10px;
            width:800px;
            margin-left:300px;
            margin-top:10px;
            overflow: auto;
        }
        .container{
            display:flex;
            justify-content:space-around;
            
        }
        .cont1 p{
            font-size:18px;
            font-family:helvetica;
            color:rgb(14,14,56);
        }
        .cont2 p{
            font-size:18px;
            font-family:helvetica;
            color:rgb(14,14,56);
        }
        .stit{
            font-size:20px;
            text-align:center;
            font-family:helvetica;
            color:rgb(14,14,46);
        }
    </style>
</head>
<body>
    <?php
    include("menu.php");
    ?>
    <?php
        $selection=$bdd->query("SELECT * FROM abonnes ORDER BY id_ab");
    ?>
    <h1 class="title">Les abonnés</h1>
    <div class="container01">
        <?php
        while($dataselect=$selection->fetch()){
        ?>
        <div class="container">
        <div class="cont1">
            <h2 class="stit">Emails</h2>
               <p><?php echo  $dataselect["email"];?></p> 
        </div>
        <div class="cont2">
            <h2 class="stit">Messages</h2>
               <p><?php echo $dataselect["messages"];?></p> 
        </div>
        </div>
        <?php
        }
    ?>
    </div>
    <br><br><br>
   
    <?php
    include("footer.php");
    ?>
</body>
</html>