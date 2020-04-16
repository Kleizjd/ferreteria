<?php
@session_start();
include_once "../../config/connection.php";

$objSession = new connection();
$obtain = $objSession->getConnection();

if(!empty($_POST)){

	if(!empty($_POST["function"])){

		switch($_POST["function"]){
			//============================================================================================
			//======================CASE VALIDATE SESSION================================================
			case "validate_session":

				if(!empty($_POST["user"]) && !empty($_POST["password"])){

					$user = $obtain->real_escape_string($_POST["user"]);
					$password = $obtain->real_escape_string($_POST["password"]);
					$answer = array();
					$sqlVerify = $objSession->execute("SELECT login, CONCAT(name, ' ', last_name) AS Complete_Name, password, role FROM user WHERE login = '$user' AND status = 'A'");
					// echo "SELECT login, CONCAT(name, ' ', last_name) AS Complete_Name, password, role FROM user WHERE login = '$user' AND status = 'A' <br>";
					// var_dump($sqlVerify);
					//=========================VERIFY PASSWORD============================================
					if(mysqli_num_rows($sqlVerify) != 0){
						$row = $sqlVerify->fetch_assoc();
						$passwordDB = $row['password'];
						if(password_verify($password, $passwordDB)){
							$_SESSION['user_completeName'] = str_replace("*", "", $row['Complete_Name']);
							$_SESSION['user_role'] = $row['role'];
							$_SESSION['user_id'] = $row['login'];
							// var_dump($_SESSION['user_completeName']);
							$answer['typeAnswer'] = "success";
							

						} else {
							$answer['typeAnswer'] = "error";
						}
						
					}  else {
						$answer['typeAnswer'] = "fail";
					}
					echo json_encode($answer);
				}
				break;

			case "register_user":
			
				if(!empty($_POST["user"]) && !empty($_POST["password"]) && !empty($_POST["verifyPassword"]) ){
					
					$user = $obtain->real_escape_string($_POST['user']);
					$password = $obtain->real_escape_string($_POST['password']);
					$verifyPassword = $obtain->real_escape_string($_POST['verifyPassword']);
					$answer = array();

					if ($password === $verifyPassword) {

						$bytes = random_bytes(22);
						$options = [
							'cost' => 10,
							'salt' => bin2hex($bytes)
						];

						$passEncrypt = password_hash($password, PASSWORD_BCRYPT, $options);

						$sqlVerify = $objSession->execute("INSERT INTO user (login, password, role, status) VALUES ('$user', '$passEncrypt', 1, 'A')");

						if(mysqli_affected_rows($objSession->getConnection()) > 0 ){
							$answer['typeAnswer'] = "success";
							// echo "bueno";
						}  else {
							$answer['typeAnswer'] = "error";
							// echo "error";
						}
					} else { 
						// echo "fallo";
						$answer['typeAnswer'] = "fail";
					}
					echo json_encode($answer);
				}
				break;

			case "close_session":
				@session_unset();
				@session_destroy();
				break;
		}
	}

}







