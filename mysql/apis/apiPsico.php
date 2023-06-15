<?php
    ini_set("display_errors", 1);

    ini_set("display_startup_errors", 1);
        
    error_reporting(E_ALL);
    
        $psicologas = '[
            {
            "id_psico": 1,
            "nombre_psico": "Angie Suarez",
            "edad_psico": "26",
            "especialidad_psico": "Adolescencia"
            },
            {
            "id_psico": 2,
            "nombre_psico": "Vanessa",
            "edad_psico": "25",
            "especialidad_psico": "Adolescencia"
            }
        ]';
    
        $datosPsicologas = json_decode($psicologas, true);
            
        $server = "localhost";
        $user = "campus";
        $pass = "campus2023";
        $bd = "psychology";

        $conexion = mysqli_connect($server, $user, $pass, $bd) 
        or die("Ha sucedido un error inesperado en la conexion de la base de datos");

        foreach ($datosPsicologas as $psicologas) {
            mysqli_query($conexion, "INSERT INTO psicologas (id_psico, nombre_psico, edad_psico, especialidad_psico) VALUES ('".$psicologas['id_psico']."','".$psicologas['nombre_psico']."','".$psicologas['edad_psico']."','".$psicologas['especialidad_psico']."')");
        }

        mysqli_close($conexion);

?>