<?php 

    include_once 'conexion.php';
    $codigo =$_GET['codigo'];
    $nombre =$_GET['nombre'];
    $apellido =$_GET['apellido'];
    $direccion =$_GET['direccion'];
    $telefono =$_GET['telefono'];
    
    $insertar = "insert into personas(codigo, nombre, apellido, direccion, telefono) values('{$codigo}','{$nombre}','{$apellido}','{$direccion}','$telefono' )";
    $ejecutar = mysqli_query($conexion,$insertar);
    $json =array();
    
    $datos["codigo"]=$codigo;
    $datos["nombre"]=$nombre;
    $datos["apellido"]=$apellido;
    $datos["direccion"]=$direccion;
    $datos["telefono"]=$telefono;
    
    $json[]=$datos;
    echo json_encode($json);


?>