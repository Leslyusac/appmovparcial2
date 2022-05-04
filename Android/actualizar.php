<?php 
    include_once 'conexion.php';
    $codigo=$_GET['codigo'];
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $direccion=$_GET['direccion'];
    $telefono=$_GET['telefono'];

    $actualizar = "update personas set nombre = '{$nombre}', apellido = '{$apellido}', direccion = '{$direccion}', telefono = '{$telefono}' where codigo ='{$codigo}'";
    $ejecutar = mysqli_query($conexion, $actualizar);
    
    $json = array();
    
    $datos["codigo"] =$codigo;
    $datos["nombre"] =$nombre;
    $datos["apellido"] =$apellido;
    $datos["direccion"] =$direccion;
    $datos["telefono"] =$telefono;
    
    $json[]=$datos;
    echo json_encode($json);

?>