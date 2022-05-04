<?php 

    include_once 'conexion.php';
    $codigo = $_GET['codigo'];
    $busqueda = "select * from personas where codigo = '{$codigo}'";
    $resultado_busqueda = mysqli_query($conexion,$busqueda);
    $json = array();
    $contar =0;
    while ($datos = mysqli_fetch_array($resultado_busqueda)){
        $json[]=$datos;
        $contar = $contar+1;
    }
    if($contar==0){
        $datos["codigo"]=-1;
        $datos["nombre"]="Sin datos";
        $datos["apellido"]="Sin datos";
        $datos["direccion"]="Sin datos";
        $datos["telefono"]="Sin datos";
        $json[]=$datos;
    }
    mysqli_close($conexion);
    echo json_encode($json);

?>