<?php
    // database
    include("./conex.php");
    
    //accionar todo cuando se de click en submit 
    if(isset($_GET['submit'])){
        // take data
        $typePassword = $_GET['typePassword'];
        $password = $_GET['password'];

        // submit data to bd
        $query = "INSERT INTO data (type, password) VALUES ('$typePassword', '$password')";
        $result = $conex -> query($query);
        
        // validar
        if($result){
            header("Location: ../public/view.php");
        }else{
            echo "error" . die();
        }
    }
?>