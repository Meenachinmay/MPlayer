<?php 
	/**
	 * 
	 */
	class Account
	{
		private $errorArray;

		public function __construct()
		{
			$this->errorArray = array();
		}

		public function register($username, $firstName, $lastName, $email, $email2, $password, $password2){
			$this->validateUsername($username);
			$this->validateFirstname($firstName);
			$this->validateLastname($lastName);
			$this->validateEmails($email, $email2);
			$this->validatePasswords($password, $password2);

			if (empty($this->errorArray) == true){
				// insert into db
				return true;
			}else{
				return false;
			}
		}

		public function getError($error){
			if (!in_array($error, $this->errorArray)){
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		private function validateUsername ($un){
			if (strlen($un) > 25 || strlen($un) < 5){
				array_push($this->errorArray, "Your username must be between 5 and 25 characters");
				return;
			}

			// TODO: check if the username is already exists
		}

		private function validateFirstname ($fn){
			if (strlen($fn) > 25 || strlen($fn) < 2){
				array_push($this->errorArray, "Your firstname must be between 5 and 25 characters");
				return;
			}
		}

		private function validateLastname ($ln){
			if (strlen($ln) > 25 || strlen($ln) < 2){
				array_push($this->errorArray, "Your lastname must be between 5 and 25 characters");
				return;
			}
		}

		private function validateEmails ($email, $email2){
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

		private function validatePasswords ($password, $password2){
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
				array_push($this->errorArray, "Your password must be between 5 and 25 characters");
				return;
			}

			}
		}
	}

 ?>