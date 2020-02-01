<?php  

	function sanitizeFormPassword($inputtext){
		$inputText = strip_tags($inputtext);
		return $inputText;
	}

	function sanitizeFormUsername($inputtext){
		$inputText = strip_tags($inputtext);
		$inputText = str_replace(" ", "", $inputtext);
		return $inputText;
	}

	function sanitizeFormString($inputtext){
		$inputText = strip_tags($inputtext);
		$inputText = str_replace(" ", "", $inputtext);
		$inputText = ucfirst(strtolower($inputtext));
		return $inputText;	
	}

	if (isset($_POST['loginButton'])){

	}

	if (isset($_POST['registerButton'])){
		$username = sanitizeFormUsername($_POST['username']);

		$firstName = sanitizeFormString($_POST['firstName']);
		$lastName = sanitizeFormString($_POST['lastName']);

		$email = sanitizeFormString($_POST['email']);
		$email2 = sanitizeFormString($_POST['email2']);

		$password = sanitizeFormPassword($_POST['password']);
		$password2 = sanitizeFormPassword($_POST['password2']);
	}
?>