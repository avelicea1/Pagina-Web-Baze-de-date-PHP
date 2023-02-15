<?php
    include('../includes/conncect.php');
    if(isset($_POST['adauga_agentie'])){
        $agentie_id = $_POST['id_agentie'];
        $agentie_nume = $_POST['nume'];
        $agentie_telefon = $_POST['telefon'];
        $insert_query = "insert into agentie (id_agentie,nume,telefon) values('$agentie_id','$agentie_nume','$agentie_telefon')";
        $result = mysqli_query($conn,$insert_query);
        if($result){
            echo "<script>alert('Agency has been inserted')</script>";
        }
    }   
?>

<h3 class="text-center">Adauga Agentie</h3>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="id_agentie" placeholder="Adauga Id" 
        aria-label="Username" 
        aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="nume" placeholder="Adauga nume" 
        aria-label="Username" 
        aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="telefon" placeholder="Adauga telefon" 
        aria-label="Username" 
        aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info " 
        name="adauga_agentie" value="Adauga Agentie" 
         >
    </div>
    
</form>