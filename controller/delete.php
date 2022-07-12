<?php
    // database
    include("./conex.php");
    if(isset($_POST['delete'])){
        $id = $_POST['eliminar'];
        $sql = "DELETE FROM data WHERE id= $id";
        
        if($conex -> query($sql) === true){
            // echo "funciona";
            header("location: ../public/view.php");
        }else{
            die("errno" . $conex->error);
        }
    }

?>