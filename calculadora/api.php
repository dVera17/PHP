<?php

echo <<<HTML
<link rel="stylesheet" href="styles.css">
<br> <a href="index.html" target="_blank">Volver</a> <br>
<div class="video">
    <video autoplay muted loop src="CASIO Classwiz fx-991LA X _ HOJA DE CÁLCULO.mp4"></video>
</div>
HTML;

switch ($_POST["operacion"]) {
    case '+':
        showResult(sumar($_POST));
        break;
    case '-':
        showResult(restar($_POST));
        break;
    case '*':
        showResult(multiplicar($_POST));
        break;
    case '/':
        showResult(dividir($_POST));
        break;
    case 'potencia':
        showResult(potenciar($_POST));
        break;
    case 'sin':
        showResult(calcularSeno($_POST));
        break;
    case 'cos':
        showResult(calcularCoseno($_POST));
        break;
    default:
        break;
}

function sumar($data){
    return doubleval($data["numero1"]) + doubleval($data["numero2"]);
}

function restar($data){
    return doubleval($data["numero1"]) - doubleval($data["numero2"]);
}

function multiplicar($data){
    return doubleval($data["numero1"]) * doubleval($data["numero2"]);
}

function dividir($data){
    if(doubleval($data["numero2"]) != 0){
        return doubleval($data["numero1"]) / doubleval($data["numero2"]);
    }
    return "UNDEFINED";
}

function potenciar($data){
    return pow(doubleval($data["numero1"]), doubleval($data["numero2"]));
}

function calcularSeno($data){
    return sin(doubleval($data["numero1"]));
}

function calcularCoseno($data){
    return cos(doubleval($data["numero1"]));
}

function showResult($result){
    printf("El resultado es  %s", $result);
}

?>