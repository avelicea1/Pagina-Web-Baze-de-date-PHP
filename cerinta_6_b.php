<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <h3 class="text-center">Cerinta 6 b</h3>
        <h5 class="text-center"> Să se găsească pentru fiecare zonă și monedă, prețul total al ofertelor de
închiriere apartament și numărul ofertelor.</h5>
<table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">total</th>
                    <th scope="col">zona</th>
                    <th scope="col">moneda</th>
                    <th scope="col">nr oferte</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('../includes/conncect.php');
                $query = "SELECT COUNT(Oferta.pret)as nr_oferte ,SUM(Oferta.pret)as Total ,Spatiu.zona as zona, oferta.moneda as moneda
                FROM Oferta join Spatiu on oferta.id_spatiu=spatiu.id_spatiu 
                WHERE Oferta.vanzare='N' AND id_tip IN (SELECT id_tip from tip WHERE denumire='apartament')
                GROUP BY Spatiu.zona,Oferta.moneda;";
                $result = mysqli_query($conn,$query);
                $number = mysqli_num_rows($result);
                if($number >0){
                    while($row = $result -> fetch_assoc()){
                    ?>
                    <tr>
                    <td><?php echo $row['Total']?></td>
                        <td><?php echo $row['zona']?></td>
                        <td><?php echo $row['moneda']?></td>
                        <td><?php echo $row['nr_oferte']?></td>
                    </tr>
                <?php    
                    }
                }
            ?>
            </tbody>

</table>
<div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div>
                    
                </div>
                <div class="button text-center">
                    <button><a href="../admin_area" class="nav-link text-light bg-info my-1">Inapoi la Meniu </a></button>
                    
                </div>
            </div>
        </div>
    </body>
    

</html>