<?php 
/** * Verifica que una fecha esté dentro del rango de fechas establecidas 
* @param $start_date fecha de inicio 
* @param $end_date fecha final 
* @param $evaluame fecha a comparar 
* @return true si esta en el rango, false si no lo está */ 
function check_in_range($start_date, $end_date, $evaluame) { 
$start_ts = strtotime($start_date); 
$end_ts = strtotime($end_date); 
$user_ts = strtotime($evaluame); 
return (($user_ts >= $start_ts) && ($user_ts <= $end_ts)); 
} 
[/pyg] Ejemplo de uso: [pyg lang=”php” style=”default” linenumbers=””]