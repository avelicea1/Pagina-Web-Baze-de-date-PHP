<?php
    include('../includes/conncect.php');
    if(isset($_POST['adauga_spatiu'])){
        $spatiu_id = $_POST['id_spatiu'];
        $tip_id = $_POST['id_tip'];
        $spatiu_adresa = $_POST['adresa'];
        $spatiu_zona = $_POST['zona'];
        $spatiu_suprafata = $_POST['suprafata'];
        $query_verificare = "select * from tip where id_tip = '$tip_id'";
        $result_verificare=mysqli_query($conn,$query_verificare);
        $number = mysqli_num_rows($result_verificare);
        if($number>0){ 
            $insert_query = "insert into spatiu (id_spatiu,adresa,zona,suprafata,id_tip) values('$spatiu_id','$spatiu_adresa','$spatiu_zona','$spatiu_suprafata','$tip_id')";
        $result = mysqli_query($conn,$insert_query);
            if($result){
                echo "<script>alert('Spatiu has been inserted')</script>";
            }
        }
       
    }   
?>
<h3 class="text-center">Adauga Spatiu</h3>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="id_spatiu" placeholder="Adauga Id" >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="adresa" placeholder="Adauga adresa" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="zona" placeholder="Adauga zona" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="suprafata" placeholder="Adauga suprafata" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="id_tip" placeholder="Adauga id_tip" 
        >
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info " 
        name="adauga_spatiu" value="Adauga Spatiu" 
         >
    </div>
    
</form>