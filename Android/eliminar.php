<?php 
    include_once 'conexion.php';
    $codigo=$_GET['codigo'];
    $delete = "delete from personas where codigo =".$codigo;
    $ejecutar = mysqli_query($conexion,$delete);
    $json = array();
    
    if($ejecutar){
        $datos["codigo"]=$codigo;
        $datos["nombre"]="Nombre eliminado";
        $datos["apellido"]="Apellido eliminado";
        $datos["direccion"]="Direccion eliminada";
        $datos["telefono"]=0;
        $json[]=$datos;
        echo json_encode($json);
    }


?>