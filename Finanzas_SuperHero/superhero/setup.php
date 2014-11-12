<?php
//Setup file:
#Conexión a la bdd
$dbc = mysqli_connect('192.168.100.7', 'admin', 'tonito123', 'facturacion') OR die('No se puede conectar a la BDD, error: '.mysqli_connect_error());
?>