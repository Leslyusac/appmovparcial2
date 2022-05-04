<?php 
    include_once 'conexion.php';
    $busqueda = "select * from personas";
    $resultado_busqueda = mysqli_query($conexion,$busqueda);
    $json = array();
    $contar =0;
    while ($datos = mysqli_fetch_array($resultado_busqueda)){
        $json[]=$datos;
        $contar = $contar+1;
    }
    if($contar==0){
        $datos["codigo"]=-1;
        $datos["nombre"]="sin datos";
        $datos["apellido"]="sin datos";
        $datos["direccion"]="sin datos";
        $datos["telefono"]=0;
        $json[]=$datos;
    }
    mysqli_close($conexion);
    echo json_encode($json);


?>