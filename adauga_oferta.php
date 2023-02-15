<?php
    include('../includes/conncect.php');
    if(isset($_POST['adauga_oferta'])){
        $spatiu_id = $_POST['id_spatiu'];
        $agentie_id = $_POST['id_agentie'];
        $oferta_vanzare = $_POST['vanzare'];
        $oferta_pret = $_POST['pret'];
        $oferta_moneda = $_POST['moneda'];
        $query_verificare1 = "select * from spatiu where id_spatiu = '$spatiu_id'";
        $result_verificare1=mysqli_query($conn,$query_verificare1);
        $number1 = mysqli_num_rows($result_verificare1);
        $query_verificare2 = "select * from agentie where id_agentie = '$agentie_id'";
        $result_verificare2=mysqli_query($conn,$query_verificare2);
        $number2 = mysqli_num_rows($result_verificare2);
        if($number1>0 && $number2>0){ 
            $insert_query = "insert into oferta (id_agentie,id_spatiu,vanzare,pret,moneda) values('$agentie_id','$spatiu_id','$oferta_vanzare','$oferta_pret','$oferta_moneda')";
        $result = mysqli_query($conn,$insert_query);
            if($result){
                echo "<script>alert('Oferta has been inserted')</script>";
            }
        }
       
    }   
?>
<h3 class="text-center">Adauga Oferta</h3>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="id_agentie" placeholder="Adauga id_agentie" >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="id_spatiu" placeholder="Adauga id_spatiu" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="vanzare" placeholder="Adauga vanzare" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="pret" placeholder="Adauga pret" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="moneda" placeholder="Adauga moneda" 
        >
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info " 
        name="adauga_oferta" value="Adauga Oferta" 
         >
    </div>
    
</form>