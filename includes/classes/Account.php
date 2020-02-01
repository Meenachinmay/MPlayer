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
			if (strlen($fn) > 25 || strlen($fn) < 2){
				array_push($this->errorArray, "Youe firstname must be between 5 and 25 characters");
				return;
			}
		}

		private function validateLastname ($ln){
			if (strlen($ln) > 25 || strlen($ln) < 2){
				array_push($this->errorArray, "Youe lastname must be between 5 and 25 characters");
				return;
			}
		}

		private function validateEmails ($email1, $email2){
			if ($email != $email2){
				array_push($this->errorArray, "Your emails don't match");
				return;
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				array_push($this->errorArray, "Email is invalid");
				return;
			}

			// TODO: check that email is not already used
		}

		private function validatePasswords ($password1, $password2){
			if ($password != $password2){
				array_push($this->errorArray, "Your passwords don't match");
				return;
			}

			if (preg_match('/[^A-Za-z0-9]/', $password)){
				if ($email != $email2){
				array_push($this->errorArray, "Your password can only contain numbers and letters");
				return;
			}

			if (strlen($password) > 30 || strlen($password) < 6){
				array_push($this->errorArray, "Youe password must be between 5 and 25 characters");
				return;
			}

			}
		}
	}

 ?>