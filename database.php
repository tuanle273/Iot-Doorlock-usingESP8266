<?php
	class Database
	{
		private static $dbName = 'd58i085cp822ir' ;
		private static $dbHost = 'ec2-54-91-188-254.compute-1.amazonaws.com' ;
		private static $dbUsername = 'cuxouwrgowtnne';
		private static $dbUserPassword = '2bd6903f5d42e74da6fb8d290997bc23453de6bb1470afccb4b0ca06b0897dae';
		 
		private static $cont  = null;
		 
		public function __construct() {
			die('Init function is not allowed');
		}
		 
		public static function connect()
		{
		   // One connection through whole application
		   if ( null == self::$cont )
		   {     
			try
			{
			  self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
			}
			catch(PDOException $e)
			{
			  die($e->getMessage()); 
			}
		   }
		   return self::$cont;
		}
		 
		public static function disconnect()
		{
			self::$cont = null;
		}
	}
?>