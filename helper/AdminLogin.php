<?php 
	// include( '../commonClass/Session.php' );
	include( '../commonClass/Database.php' );
	include( '../commonClass/Format.php' );
	class AdminLogin
	{	
		private $db;
		private $fm;

		public	function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function addminLogin( $adminUser,$adminPassword )
		{
			$adminUser = $this->fm->validation( $adminUser );
			$adminPassword = $this->fm->validation( $adminPassword );

			$adminUser = mysqli_real_escape_string( $this->db->link, $adminUser );
			echo $adminUser; exit();
			// $adminPassword = mysqli_real_escape_string( $this->db->link, $adminPassword );


			if ( empty( $adminUser ) || empty( $adminPassword ) ) 
			{
				$error = "Username or Password can't be empty";
				return $error;
			}
			else
			{
				// $query = "SELECT * FROM `adamin`";
				// $result = $this->db->select( $query );

				// $row = $result->fetch_assoc();
				// // echo $row->username; exit();

				header('Location: ../admin/dashboard.php' );
			}
		}	
	}	
 ?>