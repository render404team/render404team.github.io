<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

// $saludo = recuperaTexto("saludo");
$nombre = recuperaTexto("nombre");
switch ($nombre) {
    case "eli":
        $resultado = "Me encantan los mensajes de voz.\nYo los detesto.\nSí, esos también estan chidos.";
        break;
    case "ger":
        $resultado = "¿Qué hace un mudo bailando? Una mudanza.";
        break;
    case "rau":
        $resultado = "Qué le dice una impresora a otra? Esta hoja es tuya o es impresión mía.";
        break;
    case "ser":
        $resultado = "Buenas, quería una camiseta de un personaje inspirador.\n¿Ghandi?.\nNo, mediani.";
        break;
    case "gab":
        $resultado = "¿Por qué la computadora fue a terapia? Tenía muchos bugs";
        break;
    case "kar":
        $resultado = "¿Qué hace una cebolla en una cita? Llora de emoción.";
        break;
    case "mel":
        $resultado = "¿Por qué el gato se sentó en la computadora? Para ver el mouse";
        break;    
    case "aro":
        $resultado = "Mamá, mamá... ¿Por qué en la escuela me dicen fin de semana?\nYa cállate Domingo";
        break;   
    default:
        $resultado = "Hola $nombre, no tengo un chiste para ti.";
        break;                        
}

devuelveJson($resultado);
