<?php
/**
 * Suma dos números.
 *
 * Ejemplo de uso:
 * $resultado = sumar(5, 3);
 * echo "La suma es: " . $resultado; 
 * Salida: La suma es: 8
 * 
 * @author Miguel Angel Moya Ruiz
 * @version 1.0
 * {@internal Esta anotación solo estará visible en la documentación para desarrolladores.}
 * @param float $a El primer número a sumar.
 * @param float $b El segundo número a sumar.
 * @return float La suma de los dos números.
 */
function sumar($a, $b) {
    //return $a + $b;
    //Ahora introduzco este comentario y modifico mi funci�n
    return $b + $a;
}


/**
 * Devuelve el día de la semana para una fecha dada.
 * 
 * Ejemplo de uso:
 * $fecha = '2024-05-26';
 * echo "El día de la semana para la fecha $fecha es: " . diaDeLaSemana($fecha); 
 * Salida: El día de la semana para la fecha 2024-05-26 es: domingo
 *
 * @author Miguel Angel Moya Ruiz
 * @version 1.0
 * {@internal Esta anotación solo estará visible en la documentación para desarrolladores.}
 * @param string $fecha La fecha en formato 'Y-m-d' (por ejemplo, '2024-05-26').
 * @return string El día de la semana en español (lunes, martes, miércoles, etc.).
 */
function diaDeLaSemana($fecha) {
    // Convertir la fecha en un timestamp
    $timestamp = strtotime($fecha);
    
    // Array de días de la semana en español
    $diasDeLaSemana = array(
        'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'
    );
    
    // Obtener el número del día de la semana (0 para domingo, 1 para lunes, etc.)
    $numeroDia = date('w', $timestamp);
    
    // Devolver el día de la semana correspondiente
    return $diasDeLaSemana[$numeroDia];
}

?>


