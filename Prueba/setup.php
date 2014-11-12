<?php
//Setup file:
#Conexión a la bdd
$dbc = mysqli_connect('172.20.101.11', 'admin', 'tonito123', 'finanzas') OR die('No se puede conectar a la BDD, error: ' . mysqli_connect_error());
?>