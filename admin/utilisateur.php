<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur | HvH</title>
    <style>
        body{
            background:linear-gradient(90deg,#e0dfe3,#f2f1f3);
        }
        table{
    border-top:2px solid blue;
    border-bottom:2px solid blue;
    border-left:0;
    border-right:0;
    margin-left:300px;
    margin-top:50px;
}
table thead{
    background:rgb(83,100,253);
}
table th{
    font-family:helvetica;
    padding:10px;
}
table td{
    border-bottom:2px solid blue;
    border-collapse:collapse;
    font-family:helvetica;
    padding:10px;
}
.desact{
    text-decoration:none;
    font-family:calibri;
    border:1px solid blue;
    padding:5px;
    border-radius:5px;
    background:linear-gradient(to top,blue,ivory);
}
.desact:hover{
    background:linear-gradient(to top,ivory,blue);
    transition:0.5s;
}
.lin{
    text-decoration:none;
    font-family:calibri;
    border:1px solid red;
    padding:5px;
    border-radius:5px;
    background:red;
    color:ivory;
}
.lin:hover{
    background:ivory;
    color:red;
    transition:0.5s;
}
    </style>
</head>
<body>
    <?php
    include("menu.php");
    $selection=$bdd->query("SELECT * FROM utilisateur ORDER BY id_user");
    if(isset($_GET["supp"])){
        $delete=$bdd->query("DELETE FROM utilisateur WHERE id_user=".$_GET["supp"]."");
    }
    if(isset($_GET['desact'])){
        $id_to_delete=$_GET['desact'];
        $select=$bdd->query("SELECT * FROM utilisateur WHERE id_user=$id_to_delete");
        $id=$_GET['desact'];
        $dataus=$select->fetch();
        if($dataus['statut']=='0'){
            $update=$bdd->EXEC("UPDATE utilisateur SET statut='1' WHERE id_user=$id");
            header('location:utilisateur.php');
            ob_end_flush();
        }elseif($dataus['statut']=='1'){
            $update=$bdd->EXEC("UPDATE utilisateur SET statut='0' WHERE id_user=$id");
            header('location:utilisateur.php');
            ob_end_flush();
        }
    }
    ?>
<table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    while($dataselection=$selection->fetch()){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $dataselection["email"];?></td>
                            <td><?php echo $dataselection["password"];?></td>
                            <!-- <td><a class="desact" href="utilisateur.php?desact=<?php echo $dataselection["id_user"];?>">
               <?php if($dataselection['statut']=='1'){
                                    $act = 'Activer';
                                    
                                    echo $act;
                                    
                                }else{
                                    $desact = 'Desactiver';
                                    echo "$desact";
                                };?>
                                </a></td> -->
                <td><a class="lin"href="utilisateur.php?supp=<?php echo $dataselection["id_user"];?>">Supprimer</a></td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
                <br><br><br>
                <?php
                include("footer.php");
                ?>
</body>
</html>