<?php

//Estructura switch

$usuario = (string) 'Marcelo';

function AccesoCorrecto($usu){
    return (string) <<<TXT
        El usuario $usu tiene acceso premium.
TXT;
}
function infiltrado($usu){
    return (string) <<<FIN
        El usuario $usu esta intentando infiltrarse.
FIN;
}

switch ($usuario) {
    case 'Marcelo':
        print_r(AccesoCorrecto($usuario));
        break;
    case 'Juan':
        print_r(AccesoCorrecto($usuario));
        break;
    case 'William':
        print_r(AccesoCorrecto($usuario));
        break;
    default:
        print_r(infiltrado($usuario));
        break;
}


// Estructura switch con array (lista)

$LISTA = (array) ["Miguel","Marcelo"];

switch ($LISTA[1]) {
    case "Miguel":
            print_r("Hola Miguel");
        break;
    case "Marcelo":
            print_r("Hola Marcelo");
        break;
    default:
       print_r("Error");
        break;
}


//Sentencia for

for ($i=0; $i < 10; $i++) { 
    # code
}
// for con goto

for ($i=0; $i < 10; $i++) { 
    if($i==3){
        print_r($i);
        goto salir_del_ciclo;
    }
}
salir_del_ciclo:

//Sentencia for each

    $lista = (array) ["Miguel", "Thomas", "William"];

    foreach ($lista as $key => $value) {
        $cadena = (string) <<<FIN
        $value <br>
FIN;
        print_r($cadena);
    }

?>