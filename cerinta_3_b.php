<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <h3 class="text-center">Cerinta 3 b</h3>
        <h5 class="text-center"> Să se găsească detaliile ofertelor de tip ’vânzare’ cu prețul sub 70000 EUR
sau echivalentul în moneda ofertei (RON sau USD) la cursul zilei.</h5>
        <?php
        echo '<form method="GET">';
        //label ii numele din fata campului
        echo '<label for="text1">Vanzare(D)/inchiriere(N)   : </label>';

        //aici facem un input text sa bagam un nume de exemplu
        echo '<input name="text1"></input>';

        //aici e un dropdown care in functie de optiune trimite 1, 2 sau 3 
        echo '<select name="select">';
        echo '<option value="70000">pret mai mic de 70000</option>';
        echo '<option value="80000">pret mai mic de 80000</option>';
        echo '<option value="90000">pret mai mic de 90000</option>';
        echo '</select>';

        //buton care daca e apasat trimite datele si le vezi sus in link
        echo '<button type="submit" name="submit_form">Submit</button>';
        echo '</form>';
        ?>
<table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">id_agentie</th>
                    <th scope="col">id_spatiu</th>
                    <th scope="col">vanzare</th>
                    <th scope="col">pret</th>
                    <th scope="col">moneda</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 if(isset($_GET['submit_form']))
                 {
                    $text1=$_GET['text1'];
                    $select=$_GET['select'];
                    include('../includes/conncect.php');
                    $query = "SELECT * 
                    FROM Oferta 
                    WHERE (vanzare = '$text1' AND(( pret<$select AND moneda ='EUR') OR (pret<343961 AND moneda = 'RON') OR (pret<73488 AND moneda ='USD')));";
                    $result = mysqli_query($conn,$query);
                    $number = mysqli_num_rows($result);
                    if($number >0){
                        while($row = $result -> fetch_assoc()){
                        ?>
                        <tr>
                        <td><?php echo $row['id_agentie']?></td>
                            <td><?php echo $row['id_spatiu']?></td>
                            <td><?php echo $row['vanzare']?></td>
                            <td><?php echo $row['pret']?></td>
                            <td><?php echo $row['moneda']?></td>
                        </tr>
                    <?php    
                    }
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