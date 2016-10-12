<?php 
	include( '../commonClass/Session.php' );
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

		public function addminLogin( $username,$password )
		{
			if ( empty( $username) || empty( $password ) ) 
			{
				$error = "Username or Password can't be empty";
				return $error;
			}
		}	
	}	
 ?>