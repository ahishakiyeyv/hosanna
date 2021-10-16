<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperation Contact | HvH</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        table{
            border-top:2px solid blue;
            border-bottom:2px solid blue;
            border-left:0;
            border-right:0;
            margin:50px;
        }
        table thead{
            background:rgb(83,100,253);
        }
        table th{
            font-family:helvetica;
            padding:10px;
            text-align:center;
        }
        table td{
            border-bottom:2px solid blue;
            border-collapse:collapse;
            font-family:helvetica;
            padding:10px;
            text-align:center;
        }
        .title{
            font-family:calibri;
            font-size:25px;
            text-align:center;
            letter-spacing:8px;
        }
    </style>
</head>
<body>
    <?php
    include("menu.php");
    $select=$bdd->query("SELECT * FROM contact ORDER BY id_co DESC");
    ?>
    <section class="sect">
        <h1 class="title">Recuperation Contact</h1>
        <table>
           <thead>
               <tr>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Email</th>
                   <th>Telephone</th>
                   <th>Message</th>
               </tr>
           </thead>
           <?php
           while($dataselect=$select->fetch()){
           ?>
           <tbody>
               <tr>
                   <td><?php echo $dataselect["nom"];?></td>
                   <td><?php echo $dataselect["prenom"];?></td>
                   <td><?php echo $dataselect["email"];?></td>
                   <td><?php echo $dataselect["telephone"];?></td>
                   <td><?php echo $dataselect["messages"];?></td>
               </tr>
           </tbody>
           <?php
           }
           ?>
        </table>
    </section>
    <?php
    include("footer.php");
    ?>
</body>
</html>