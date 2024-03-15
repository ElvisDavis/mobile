<?php
require_once "global.php";

//Steamos las variables de conexión
$conexion= new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

//Realizamos la conexión
mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');

//si tenemos un posible error en la conexión lo mostramos

if (mysqli_connect_errno()) {
    //Imprimimos el error posible que de 
    printf("Fallo la conexión a la base de datos; %\n", mysqli_connect_error());
    exit();
}
if (!function_exists('ejecutarConsulta')) {
    # code...
    function ejecutarConsulta($sql)
    {
        global $conexion;
        $query=$conexion->query($sql);
        return $query;
    }

    //creamos una funcion para realizar una consulta de una sola fila
    function ejecutarCOnsultaSImpleFila($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    //Implememtamos un función para retornar el id de un registro
    function ejecutarConsulta_retornarID($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        return $conexion->insert_id;
    }
    //función para limpiar uan cadena 
    function limpiarCadena($str)
    {
        global $conexion;

    }

}
?>