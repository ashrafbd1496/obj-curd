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
			return $this -> connection = new mysqli($this ->host,$this ->user,$this ->pass,$this ->db);

		}
		
		protected function insert($table, array $data)
		{

			// echo "<pre>";
			// print_r($data);

			//Make sql column from data
			$array_key = array_keys($data);
			$array_col = implode(',', $array_key);


			//Make SQL values from data
			$array_val = array_values($data);
			

			foreach ($array_val as $value) {

				$form_value[] = "'".$value."'" ;
			}

			$array_values = implode(',', $form_value);


			//Data send to Database
			$sql = "INSERT INTO $table ($array_col) VALUES ($array_values)";

			$query = $this ->connection () ->query($sql);
			if ($query) {
				return true;
			}
		}








	}


