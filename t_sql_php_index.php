<?php
	include(conn.php);
	$Obj = new conn;

	/* Parametros de conección */
	$Obj->NomBD = "Prueba";
	$Obj->UserBD = "root";
	$Obj->PassBD = "12345";
	$Obj->HostBD = "localhost";
	
	$Prb = $Obj->ExecSql("select 2 as Num");
	$Datos = mysql_fetch_array($Prb);

	//echo $Datos['Num'];

	while($Datos = mysql_fetch_array($Prb)){
		echo $Datos['Nombre']."---".$Datos['Precio'];
		echo "<br />";
	}
?>
