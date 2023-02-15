<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <h3 class="text-center">Cerinta 6 a</h3>
        <h5 class="text-center"> Să se găsească prețul minim, mediu și maxim per monedă și vanzare pentru
spațiile de tip ’apartament’.</h5>
<table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">pret_minim</th>
                    <th scope="col">pret_mediu</th>
                    <th scope="col">pret_maxim</th>
                    <th scope="col">moneda</th>

                </tr>
            </thead>
            <tbody>
            <?php
                include('../includes/conncect.php');
                $query = "SELECT MIN(pret) as min, MAX(pret) as max, ROUND(AVG(pret)) as mediu, moneda
                FROM Oferta
                where id_spatiu in (select id_spatiu from spatiu where id_tip = (select id_tip from tip where denumire='apartament')) AND vanzare ='D'
                group by moneda;";
                $result = mysqli_query($conn,$query);
                $number = mysqli_num_rows($result);
                if($number >0){
                    while($row = $result -> fetch_assoc()){
                    ?>
                    <tr>
                    <td><?php echo $row['min']?></td>
                        <td><?php echo $row['max']?></td>
                        <td><?php echo $row['mediu']?></td>
                        <td><?php echo $row['moneda']?></td>
                        
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