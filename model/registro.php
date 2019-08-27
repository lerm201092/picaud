<?php
    // Conexion a base de datos
    require_once "./conexion.php";
    $conexion = conexion();

    // Recibir parametros
    $opcion = $_POST["opcion"];
    
    // INICIO LLENAR TIPO ID
    if($opcion == "llenar_tipoid"){
        $datos = array();
        $datos = null;

        $consulta = "SELECT * FROM TIPO_DOCUMENTO ORDER BY DESCRIPCION ASC";
        $registros = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($registros)) {
            $datos[]= array(
                0          => $fila[0],  
                1          => $fila[1]
            );
            // 0: ID,    1: DESCRIPCION
        }

        $json = json_encode( $datos, JSON_UNESCAPED_UNICODE );
        echo ( $json ) ; 
    }
    // FIN LLENAR TIPO ID

?>