<?php

global $wpdb;
$result = $wpdb->get_results( "SELECT * FROM demonstracao");

echo "<style>";
echo "body {font-family: Arial;}";

echo ".table_container { padding: 10px 12px 0px 12px;  border: 1px solid #ccc;  }";
echo ".table_container th { background-color:lightblue; color:white; font-weight:bold; border-left: 1px solid white;}";
echo "</style></head>";
echo "<body>";

echo "<div class=\"table_container\"><table>";
echo "<tr><th style=\"padding-left:10px;\">ID</th><th>Nome</th><th>Imagem</th></tr>";

foreach ($result as $row)
{
	echo "<tr><td>" . $row->ID . "</td><td>" . $row->Nome . "<td><img src = ". $row->Imagem."></td></tr>";
}

echo "</table></div>";

?>