<?php
session_start();


//print_r($_SESSION);//sera destruido so que so ira ver as alteracoes aparti de um redirecionamento
session_destroy();
header('location: index.php')

?>