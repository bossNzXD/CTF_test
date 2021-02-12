<?php 
session_start();
date_default_timezone_set('Asia/Bangkok');
class pdo_mysql{
	private static $HOST = "localhost";
	private static $USER = "root";
	private static $PASSWORD = "";
	private static $DATABASE = "ctf";
	public function DB_PDO(){
			$opt = array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
				PDO::ATTR_EMULATE_PREPARES => FALSE,
			);
			$dsn = "mysql:host=" . self::$HOST . ';dbname=' . self::$DATABASE . ';charset=utf8';
			try {
				$pdo_connect = new PDO($dsn, self::$USER, self::$PASSWORD, $opt);
			} catch (Exception $e) {
				$pdo_connect = $e->GetMessage();
			}
		return $pdo_connect;
	}
}

?>