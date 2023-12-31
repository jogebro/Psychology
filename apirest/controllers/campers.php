<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
    header('Content-Type: application/json');

    require_once('../config/Conectar.php');
    require_once('../models/Camper.php');

    $camper = new Camper();

    $body = json_decode(file_get_contents("php://input"),true);

    switch ($_GET["op"]) {
        case "GetAll":
            $datos = $camper-> getCamper();
            echo json_encode($datos);
            break;
        case "GetId":
            $datos = $camper-> getCamperId($body['id']);
            echo json_encode($datos);
            break;
        case "Insert":
            $datos = $camper-> insert_camper($body['id'],$body['imagen'],$body['nombre'],$body['edad'],$body['promedio'],$body['nivelCAmpus'],$body['nivelIngles'],$body['especialidad'],$body['direccion'],$body['celular'],$body['Ingles'],$body['Ser'],$body['Review'],$body['Skills'],$body['Asitencia']);
            echo json_encode("insertado correctamente");
            break;
    }

?>