<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/chambre.css">
    <title>Chambres|HvH</title>
</head>
<body>
    <?php
    include("menu.php");
    ?>
    <article>
        <section id="section1">
            <div class="div1">
                <h1 class="h_cha">Chambres</h1>
            </div>
            <div class="img_chambre">
                <img class="img_cha" src="images/2.jpg" alt="images non disponible">
            </div>
        </section>
        <section id="section2">
            <h1 class="title0">Nos chambres</h1>
            <hr style="width:800px;text-align:center;">
            <div class="boxe">
                <div class="box1">
                    <img class="img_box" src="images/11.jpg" alt="images non disponible">
                </div>
                <div class="box2"> 
                    <h3 class="title2">Chambre Simple</h3>
                    <p class="p_box2">Les chambres simples sont composées de:</p>
                    <ul>
                        <li>Un lit </li>
                        <li>Un Barza</li>
                        <li>douche & toilette à l'intérieur</li>
                    </ul>
                    <hr style="width:300px;">
                    <p class="p_under"><i class="fas fa-wifi"></i>    |   <i class="fas fa-utensils"></i>   |    <i class="fas fa-glass-martini"></i>   |    <i class="fas fa-coffee"></i>    </p>
                </div>
                <div class="box3">
                    <h3 class="h3_tit">A partir de:</h3>
                    <p class="p_box3">10000fbu/nuit</p>
                    <a class="more" href="simple.php">Plus d'info</a>
                </div>
            </div>
            <div class="boxe">
                <div class="box1">
                    <img class="img_box" src="images/6.jpg" alt="images non disponible">
                </div>
                <div class="box2"> 
                    <h3 class="title2">Chambre Standard</h3>
                    <p class="p_box2">Les chambres standards sont composées de:</p>
                    <ul>
                        <li>Un lit </li>
                        <li>Un Barza</li>
                        <li>Un salon</li>
                        <li>douche & toilette à l'intérieur</li>
                    </ul>
                    <hr style="width:300px;">
                    <p class="p_under"><i class="fas fa-wifi"></i>  |   <i class="fas fa-utensils"></i>   |      <i class="fas fa-glass-martini"></i>    |   <i class="fas fa-coffee"></i></p>
                </div>
                <div class="box3">
                    <h3 class="h3_tit">A partir de:</h3>
                    <p class="p_box3">20000fbu/nuit</p>
                    <a class="more" href="standard.php">Plus d'info</a>
                </div>
            </div>
            <div class="boxe">
                <div class="box1">
                    <img class="img_box" src="images/2.jpg" alt="images non disponible">
                </div>
                <div class="box2"> 
                    <h3 class="title2">Chambre VIP</h3>
                    <p class="p_box2">Les chambres VIP sont composées de:</p>
                    <ul>
                        <li>Un lit </li>
                        <li>Un Barza</li>
                        <li>Un salon</li>
                        <li>Connexion wifi</li>
                        <li>douche & toilette à l'intérieur</li>
                    </ul>
                    <hr style="width:300px;">
                    <p class="p_under">    <i class="fas fa-wifi"></i>    |   <i class="fas fa-utensils"></i>   |   <i class="fas fa-glass-martini"></i>    |   <i class="fas fa-coffee"></i>   </p>
                </div>
                <div class="box3">
                    <h3 class="h3_tit">A partir de:</h3>
                    <p class="p_box3">30000fbu/nuit</p>
                    <a class="more" href="vip.php">Plus d'info</a>
                </div>
            </div>
            <div class="boxe">
                <div class="box1">
                    <img class="img_box" src="images/11.jpg" alt="images non disponible">
                </div>
                <div class="box2"> 
                    <h3 class="title2">Appartement</h3>
                    <p class="p_box2">L'appartement  est composées de:</p>
                    <ul>
                        <li>Un lit </li>
                        <li>Un Barza</li>
                        <li>salon</li>
                        <li>salle à manger</li>
                        <li>trois chambres</li>
                        <li>douche & toilette à l'intérieur</li>
                    </ul>
                    <hr style="width:300px;">
                    <p class="p_under">    <i class="fas fa-wifi"></i>   |    <i class="fas fa-utensils"></i>   |    <i class="fas fa-glass-martini"></i>    |   <i class="fas fa-coffee"></i>   </p>
                </div>
                <div class="box3">
                    <h3 class="h3_tit">A partir de:</h3>
                    <p class="p_box3">150000fbu/jour</p>
                    <a class="more" href="#">Plus d'info</a>
                </div>
            </div>
        </section>
    </article>
    <br>
   <?php
   include("footer.php");
   ?>
</body>
</html>