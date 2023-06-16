<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

    header('Content-Type: application/json');

    require_once('../config/Conectar.php');
    require_once('../models/Psicologa.php');

    $psicologa = new Psicologa();

    $body = json_decode(file_get_contents("php://input"),true);

    switch ($_GET["op"]) {
        case "GetAll":
            $datos = $psicologa-> getPsico();
            echo json_encode($datos);
            break;
        case "GetId":
            $datos = $psicologa-> getCamperId($body['id_psico']);
            echo json_encode($datos);
            break;
        case "Insert":
            $datos = $psicologa-> insertPsico($body['id_psico'], $body['nombre_psico'], $body['edad_psico'], $body['especialidad_psico']);
            echo json_encode("insertado correctamente");

            header("Location: http://localhost/ArTeM02-039/Psychology/psychology/psychologists");

            break;
    }

?>