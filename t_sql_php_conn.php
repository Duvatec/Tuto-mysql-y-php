<?php
	/*
	* www.duvatec.com
	* VERSION: 1.0
	*/

	class {
		public $NomBD= "Nombre de la base de datos";
		public $UserBD= "Usuario de la base datos";
		public $PassBD= "Clave de acceso de la base de datos";
		public $HostBD= "Host de la base de datos";
		public $Nensaje= "";
		public $Connection;

		public function __construct(/* Posibles datos de entrada */){
			$this->Mensaje = "Objeto creado correctamente";
		}

		public function ExecSql($SQL){
			$this->Connection=mysql_connect($this->HostBD, $this->UserBD, $this->PassBD) or die(mysql_error());
			$Db = mysql_select_db($this->NomBD, $this->Connection) or die(mysql_error());
			$Result =  mysql_query($SQL) or die(mysql_error());
			$Close = mysql_close($this->Connection);
			return $Result;
		}

	}
?>
