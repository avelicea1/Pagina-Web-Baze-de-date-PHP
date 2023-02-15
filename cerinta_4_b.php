<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <h3 class="text-center">Cerinta 4 b</h3>
        <h5 class="text-center"> Să se găsească perechi de agenții (nume1, nume2) care oferă spre vânzare
același spațiu la prețuri diferite (ținând cont de cursul valutar). O pereche este
unică în rezultat.</h5>
<table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">Nume1</th>
                    <th scope="col">Nume2</th>
                    <th scope="col">Pret1</th>
                    <th scope="col">Pret2</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('../includes/conncect.php');
                $query = "SELECT distinct a1.nume as Nume1, a2.nume as Nume2, o1.pret as Pret1, o2.pret as Pret2
                FROM Agentie a1, Agentie a2, Spatiu s1, Spatiu s2, Oferta o1, Oferta o2
                WHERE 
                o1.id_spatiu = s1.id_spatiu and
                o2.id_spatiu = s2.id_spatiu and
                a1.id_agentie = o1.id_agentie and 
                a2.id_agentie = o2.id_agentie and
                o1.id_spatiu = o2.id_spatiu and 
                a1.nume > a2.nume and
                o1.vanzare = 'D' and
                o2.vanzare = 'D' and 
                (o1.pret != o2.pret and o1.moneda = o2.moneda) or (o1.moneda = 'EUR' and o2.moneda = 'RON' and o1.pret*5 = o2.pret)
                or (o1.moneda = 'RON' and o2.moneda = 'EUR' and o1.pret= o2.pret*5)
                or (o1.moneda = 'EUR' and o2.moneda = 'USD' and 1.2*o1.pret = o2.pret)
                or (o1.moneda = 'USD' and o2.moneda = 'EUR' and o1.pret = o2.pret*1.2)
                or (o1.moneda = 'USD' and o2.moneda = 'RON' and o1.pret = o2.pret)
                or (o1.moneda = 'RON' and o2.moneda = 'USD' and o1.pret = o2.pret/1.2*5)";
                $result = mysqli_query($conn,$query);
                $number = mysqli_num_rows($result);
                if($number >0){
                    while($row = $result -> fetch_assoc()){
                    ?>
                    <tr>
                    <td><?php echo $row["Nume1"]?></td>
                        <td><?php echo $row["Nume2"]?></td>
                        <td><?php echo $row["Pret1"]?></td>
                        <td><?php echo $row["Pret2"]?></td>
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