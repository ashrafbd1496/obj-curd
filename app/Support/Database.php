<?php 

	/**
	 * Namespace creation
	 */

	namespace App\Support;
	use mysqli;




	/**
	 * Database class
	 */
	abstract class Database
	{
		
		/**
		 * Server realted Propery
		 */

		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "objcrud";

		private $connection;

		/**
		 * Database conncetion setup
		 */

		public function connection ()
		{
			return $this -> $connection -> new mysqli($this ->host,$this ->user,$this ->pass,$this ->db);

		}
		








	}


