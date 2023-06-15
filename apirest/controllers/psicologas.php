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
            $datos = $psicologa-> insert_camper($body['id'],$body['imagen'],$body['nombre'],$body['edad'],$body['promedio'],$body['nivelCAmpus'],$body['nivelIngles'],$body['especialidad'],$body['direccion'],$body['celular'],$body['Ingles'],$body['Ser'],$body['Review'],$body['Skills'],$body['Asitencia']);
            echo json_encode("insertado correctamente");
            break;
    }

?>