<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Tableau de Bord</title>
    <style>
            *{
                box-sizing:border-box;
            }
            body{
                background:rgb(17,20,57);
            }
            #section11{
                margin:0;
                padding:0;
                display:flex;
                justify-content:space-between;
                height:600px;
               
            }
            .container11{
                display:flex;
                flex-direction:column;
                background:rgb(10,3,63);
            }
            .title{
                font-family:calibri;
                font-size:30px;
                text-align:center;
                padding:10px;
                color:#fff;
            }
            .il{
                list-style-type:none;
                text-align:left;
                margin-left:-40px;
                margin-top:15px;
                height:40px;
            }
            .il:hover{
                background:rgb(17,20,57);
                transition:0.5s;
            }
            .ili{
                margin-top:50px;
                list-style-type: none;
            }
            .lnk{
                text-decoration:none;
                font-family:calibri;
                font-size:20px;
                text-align:center;
                padding:20px;
                margin-left:30px;
                color:#fff;
            }
            .lnk:hover{
                color:gray;
                transition:0.5s;
            }
            .container12{
                    display:flex;
                    flex-direction:column;
                    width:1000px;
            }
            .s1container{
                display:flex;
                justify-content:space-between;
            }
            .dash{
                font-family:calibri;
                font-size:30px;
                cursor:pointer;
                color:#fff;
                margin-top:20px;
            }
            .vid{
                border:1px solid red;
                color:#fff;
                margin-top:20px;
                margin-right:20px;
                font-size:20px;
            }
            .box{
                display:flex;
                justify-content:space-between;
            }
            .box1{
                border:1px solid red;
                width:200px;
                height:140px;
                background:rgb(10,3,63);
            }
        .contains{
            display:flex;
            justify-content:space-between;
            margin-top:30px;
        }
        .c-carousel{
            border:1px solid red;
            width:700px;
            height:350px;
        }
        .quote{
            text-align:center;
            font-family:calibri;
            font-size:25px;
            color:gray;
            letter-spacing:8px;
        }
        .load{
            border:1px solid red;
            height:300px;
            width:250px;
        }
        .lnke{
            text-decoration:none;
            font-family:calibri;
            color:#fff;
        }
        .light{
            color:ivory;
            text-align:center;
            margin-top:100px;
        }
    </style>
</head>
<body>
    <section id="section11">
        <div class="container11">
            <h1 class="title">Hosannah Village Hotel</h1>
            <ul class="lee">
                <li class="il"><a class="lnk" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Tableau de Bord</a></li>
                <li class="il"><a class="lnk" href="accueil.php"><i class="fas fa-house-user"></i> Accueil</a></li>
                <li class="il"><a class="lnk" href="decouvrir.php"><i class="fab fa-cc-discover"></i> Decouvrir</a></li>
                <li class="il"><a class="lnk" href="chambre.php"><i class="fas fa-person-booth"></i> Chambres</a></li>
                <li class="il"><a class="lnk" href="service.php"><i class="fab fa-servicestack"></i>Services</a></li>
                <li class="il"><a class="lnk" href="reunion.php"><i class="fas fa-calendar-week"></i> Reunion & Evenements</a></li>
                <li class="il"><a class="lnk" href="administration.php"><i class="fas fa-users-cog"></i>Administration</a></li>
                <li class="ili"><a class="lnke"href="index.php"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </div>
        <div class="container12">
            <div class="s1container">
                <h1 class="dash"><i class="fas fa-bars"></i>  DashBoard</h1>
                <h1 class="vid">
                    Barutwanayo Eddy Grant
                </h1>
            </div>
            <div class="box">
                    <div class="box1"></div>
                    <div class="box1"></div>
                    <div class="box1"></div>
                    <div class="box1"></div>
            </div>
            <div class="contains">
                <div class="c-carousel">
                    <h1 class="quote">Mes Meilleurs Citations</h1>
                                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <p class="fs-4 align-middle light">The best way to predict your future is to create it</p>
                                <!-- <img src="images/1.jpg" class="d-block w-100" alt="Image non Disponible"> -->
                                </div>
                                <div class="carousel-item">
                                <p class="fs-4 align-middle light">A man with too many ambitions can not sleep in peace</p>
                                <!-- <img src="images/2.jpg" class="d-block w-100" alt="Image non Disponible"> -->
                                </div>
                                <div class="carousel-item">
                                <p class="fs-4 align-middle light">With God's wish everything is possible</p>
                                <!-- <img src="images/3.jpg" class="d-block w-100" alt="Image non Disponible"> -->
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                </div>
                <div class="load">

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>