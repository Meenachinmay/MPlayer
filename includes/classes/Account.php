<?php 
	/**
	 * 
	 */
	class Account
	{
		private $errorArray;

		public function __construct()
		{
			# code...
		}

		public function register($usrename, $firstName, $lastName, $email, $email2, $password, $password2){
			$this->validateUsername($username);
			$this->validateFirstname($firstName);
			$this->validateLastname($lastName);
			$this->validateEmails($email, $email2);
			$this->validatePasswords($password, $password2);
		}

		private function validateUsername ($un){
			if (strlen($un) > 25 || strlen($un) < 5){
				array_push($this->errorArray, "Youe username must be between 5 and 25 characters");
				return;
			}

			// TODO: check if the username is already exists
		}

		private function validateFirstname ($fn){

		}

		private function validateLastname ($ln){
			
		}

		private function validateEmails ($email1, $email2){
			
		}

		private function validatePasswords ($password1, $password2){
			
		}
	}

 ?>