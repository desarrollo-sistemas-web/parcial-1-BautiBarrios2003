<?php

// Pregunta 12: Escribe una función llamada calcularFactorial que tome un número entero como parámetro y devuelva el factorial de ese número. El factorial de un número se calcula multiplicando todos los números enteros positivos desde 1 hasta el número dado. Por ejemplo, el factorial de 5 (representado como 5!) es igual a 5 * 4 * 3 * 2 * 1 = 120.
// El número, debe ser mayor o igual a 0. Si es 0 o 1, el resultado debe ser 1.
// Complejidad: ALTA (3 puntos)


function calcularFactorial($numero)
{
    $obtenerfac = 1;

    if ($numero < 0) {
        echo "el numero no se puede factorizar";
    } elseif ($numero == 0 || $numero == 1) {
        return $numero = 1;
    }

    for ($i = 2; $i <= $numero; $i++) {
        if ($i <= $numero) {
            return $obtenerfac *= $numero;
        }
    }
}