<?php
    include('../includes/conncect.php');
    if(isset($_POST['adauga_tip'])){
        $tip_id = $_POST['id_tip'];
        $tip_denumire = $_POST['denumire'];
        $tip_caracteristici = $_POST['caracteristici'];
        $insert_query = "insert into tip (id_tip,denumire,caracteristici) values('$tip_id','$tip_denumire','$tip_caracteristici')";
        $result = mysqli_query($conn,$insert_query);
        if($result){
            echo "<script>alert('Tip has been inserted')</script>";
        }
    }   
?>
<h3 class="text-center">Adauga Tip</h3>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="id_tip" placeholder="Adauga Id" >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="denumire" placeholder="Adauga denumire" 
        >
    </div>
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1 bg-info">
        <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" 
        name="caracteristici" placeholder="Adauga caracteristici" 
        >
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info " 
        name="adauga_tip" value="Adauga Tip" 
         >
    </div>
    
</form>