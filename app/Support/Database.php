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

		protected function connection ()
		{
			return $this -> connection = new mysqli($this ->host,$this ->user,$this ->pass,$this ->db);

		}

		/**
		 * File upload method
		 */

		protected function fileUpload($file, $location='',array $file_type = ['jpg','png','jpeg','gif','webp'])
		{
			//file info
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];

			//file extension
			$file_array = explode('.', $file_name);
			$file_extension = strtolower(end($file_array));

			//Unique file name
			$unique_file_name = md5(time().rand()) .'.'.$file_extension; 

			//File Upload
			move_uploaded_file($file_tmp, $location . $unique_file_name );

			return $unique_file_name;


		}

		/**
		 * Data insert into table
		 */
		
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


		//Get all value
		protected function all($table, $order_by)
		{
			//Data get from database

			$sql = "SELECT * FROM $table ORDER BY id $order_by ";

			$data = $this ->connection () ->query($sql);

			if ($data) {
				return $data;
			}
		}

		}




	


