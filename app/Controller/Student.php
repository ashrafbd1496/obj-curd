<?php 

	/**
	 * Namespace creation
	 */

	namespace App\Controller;
	use App\Support\Database;




	/**
	 * Student class
	 */
	class Student extends Database
	{

		/**
		 * Add new student
		 */
		public function addNewStudent($name, $email, $cell, $img)
		{
			// parent :: insert();

			$data = $this ->insert('students', [

				'name' =>$name, 
				'email' =>$email,
				'cell' =>$cell

			]);

			if ($data) {
				return $mess = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Student added successfull<button data-dismiss = "alert" class = "close">&times;</button> </p>';
			}
		}
		
	}


