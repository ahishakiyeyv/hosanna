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
    <title>Ajouter un utilisateur</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        .contener{
            width:400px;
            border:1px solid black;
            border-radius:20px;
            box-shadow: 2px 1px 47px 12px rgba(0,0,0,0.75);
            margin-left:35%;
            margin-top:100px;
        }
        #emailii{
            border-radius:10px;
            outline:none;
            margin-top:30px;
            margin-left:30px;
            margin-right:30px;
            margin-bottom:0;
            width:300px;
            height:30px;
        }
        #pass{
            border-radius:10px;
            outline:none;
            margin-top:30px;
            margin-left:30px;
            margin-right:30px;
            margin-bottom:0;
            width:300px;
            height:30px;
        }
        #subm{
            margin:30px;
            width:300px;
            height:30px;
            background:rgb(14,14,46);
            color:ivory;
            font-family:calibri;
        }
        #subm:hover{
            background:ivory;
            color:rgb(14,14,46);
            transition:0.5s;
            box-shadow: 2px 0px 27px 5px rgba(0,0,0,0.75);
        }
        .title{
            font-family:calibri;
            font-size:25px;
            color:rgb(14,14,46);
            text-align:center;
        }
        .divi{
            margin-top:1px;
            margin-left:150px;
        }
        .utile{
            text-decoration:none;
            font-family:calibri;
            font-size:20px;
            border:1px solid green;
            border-radius:10px;
            padding:10px;
            background:linear-gradient(90deg,rgb(14,14,46),ivory);
            color:black;
        }
        .utile:hover{
            background:linear-gradient(90deg,ivory,rgb(14,14,46));
            transition:0.5s;
        }
    </style>
</head>
<body>
    <?php
    include("menu.php");
    ?>
    
    <div class="contener">
        <h2 class="title">Ajouter un utilisateur</h2>
    <form  method="post" id="formulaire">
        <span class="text">
        <input type="text" name="email" placeholder="Email..." id="emailii">
        </span>
        <br>
        <span class="passe">
        <input type="password" name="password" placeholder="password..." id="pass">
        </span>
        <br>
        <span class="sub">
            <input type="submit" value="Ajouter" name="submit" id="subm">
        </span>
    </form>
    </div>
    <br><br><br>
    <div class="divi">
        <a href="Utilisateur.php" class="utile">Utilisateur</a>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $mail=$_POST["email"]; 
    $motdepasse=md5($_POST["password"]); 
    $insertion=$bdd->prepare("INSERT INTO utilisateur(email,password)VALUES(?,?)");
    $insertion->execute(array($mail,$motdepasse));
}
?>