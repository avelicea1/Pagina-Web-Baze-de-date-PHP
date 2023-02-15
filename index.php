<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meniu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="containter-fluid p-0">
        


        <div class="bg-light my-5">
            <h3 class="text-center "> Meniu</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div>
                    
                </div>
                <div class="button text-center">
                    <button><a href="index.php?adauga_agentie" class="nav-link text-light bg-info my-1">Adauga Agentie</a></button>
                    <button><a href="vizualizeaza_agentii.php" class="nav-link text-light bg-info my-1">Vizualizeaza Agentiile</a></button>
                    <button><a href="index.php?adauga_spatiu" class="nav-link text-light bg-info my-1">Adauga Spatiu</a></button>
                    <button><a href="vizualizeaza_spatiile.php" class="nav-link text-light bg-info my-1">Vezi Spatiile</a></button>
                    <button><a href="index.php?adauga_tip" class="nav-link text-light bg-info my-1">Adauga Tip</a></button>
                    <button><a href="vizualizeaza_tipurile.php" class="nav-link text-light bg-info my-1">Vezi Tipurile</a></button>
                    <button><a href="index.php?adauga_oferta" class="nav-link text-light bg-info my-1">Adauga Oferta</a></button>
                    <button><a href="vizualizeaza_ofertele.php" class="nav-link text-light bg-info my-1">Vezi Ofertele</a></button>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <?php
                
                if(isset($_GET['adauga_agentie'])){
                    include('adauga_agentie.php');
                }
                if(isset($_GET['adauga_tip'])){
                    include('adauga_tip.php');
                }
                if(isset($_GET['adauga_spatiu'])){
                    include('adauga_spatiu.php');
                }
                if(isset($_GET['adauga_oferta'])){
                    include('adauga_oferta.php');
                }
                
            ?>
        </div>
        <div class="bg-light">
            <h3 class="text-center "> Cerinte</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 b-2 d-flex align-items-center">
                <div>
                    
                </div>
                <div class="button text-center">
                    <button><a href="cerinta_3_a.php" class="nav-link text-light bg-info my-1">cerinta 3 a)</a></button>
                    <button><a href="cerinta_3_b.php" class="nav-link text-light bg-info my-1">cerinta 3 b)</a></button>
                    <button><a href="cerinta_4_a.php" class="nav-link text-light bg-info my-1">cerinta 4 a)</a></button>
                    <button><a href="cerinta_4_b.php" class="nav-link text-light bg-info my-1">cerinta 4 b)</a></button>
                    <button><a href="cerinta_5_a.php" class="nav-link text-light bg-info my-1">cerinta 5 a)</a></button>
                    <button><a href="cerinta_5_b.php" class="nav-link text-light bg-info my-1">cerinta 5 b)</a></button>
                    <button><a href="cerinta_6_a.php" class="nav-link text-light bg-info my-1">cerinta 6 a)</a></button>
                    <button><a href="cerinta_6_b.php" class="nav-link text-light bg-info my-1">cerinta 6 b)</a></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div>
                    
                </div>
                <div class="button text-center">
                    <button><a href="../index.php" class="nav-link text-light bg-info my-1">Inapoi la Pagina Principala </a></button>
                    
                </div>
            </div>
        </div>

        <div class="bg-info p-3 text-center">
        <p> All right reserved @- Designed by Andreea-2023 </p>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>
</html>
