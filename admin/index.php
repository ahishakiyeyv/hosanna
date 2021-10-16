<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentifiez-Vous</title>
    <style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
  border-radius:20px;
  box-shadow:-4px 10px 60px 27px rgba(226,233,240,0.75);
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "email"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "email"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
.par{
  font-family:calibri;
  font-size:25px;
  color:red;
  text-align:center;
}

    </style>
  </head>
  <body>

<form class="box"  method="POST">
  <h1>Authenfication</h1>
  <input type="email" name="email" placeholder="Votre email...">
  <input type="password" name="password" placeholder="Mot de passe...">
  <input type="submit" name="submit" value="Connexion">
</form>
  </body>
</html>
<?php
if(isset($_POST["submit"])){
  $mail=$_POST["email"];
  $password=md5($_POST["password"]);
  $select="SELECT * From utilisateur WHERE email=:mail AND password=:passwod";
  $datauser=$bdd->prepare($select);
  $datauser->execute(array('mail'=>$mail,'passwod'=>$password ));
  $count=$datauser->rowCount();
  if($count >0){
      header("location:dashboard.php");
  }
  else{
      ?>
      <p class="par">Incorrect!! Veuiller Reesayer</p>
      <?php
  }
}
?>