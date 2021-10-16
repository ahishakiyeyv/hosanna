<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperation des Reservations|HvH</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        table{
            border-top:2px solid blue;
            border-bottom:2px solid blue;
            border-left:0;
            border-right:0;
            margin-left:200px;
            margin-top:50px;
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
            font-family:helvetica;
            font-size:20px;
            text-align:center;
            text-decoration:underline;
            color:rgb(14,14,46);
        }
    </style>
</head>
<body>
    <?php
        include("menu.php");
        $select=$bdd->query("SELECT * FROM reservation ORDER BY id_res");
    ?>
    <h2 class="title">Les Personnes ayant fait la reservation</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Visiteur</th>
                <th>Date de Depart</th>
                <th>Date de Depart</th>
                <th>Type de Chambres</th>
            </tr>
        </thead>
        <?php
        while($dataselect=$select->fetch()){
        ?>
        <tbody>
            <tr>
                <td><?php echo $dataselect["nom"]?></td>
                <td><?php echo $dataselect["prenom"]?></td>
                <td><?php echo $dataselect["telephone"]?></td>
                <td><?php echo $dataselect["email"]?></td>
                <td><?php echo $dataselect["visiteur"]?></td>
                <td><?php echo $dataselect["datearrive"]?></td>
                <td><?php echo $dataselect["datedepart"]?></td>
                <td><?php echo $dataselect["chambres"]?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <br><br>
    <?php
    include("footer.php");
    ?>
</body>
</html>