<?php

$dbname = "eventos";
$dbuser = 'root';
$dbpass = 'password';
$dbhost = '127.0.0.1:3306';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die("Falha ao conectar a '$dbhost'; ");
echo "Conectado a '$dbhost', MySQL; ";

mysql_select_db($dbname, $conn) or die("não foi possível selecionar '$dbname';</br>");
echo "Utilizando '$dbname';</br>";

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>
