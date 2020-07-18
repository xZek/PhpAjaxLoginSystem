<?php
session_start();  // start session
require "db.php"; // connect db
?>
<?php
if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') 
{
        $db = DB(); //db function
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if($username != "" && $password != "") {  //if its not empty input working code
		try {
			$db = DB();
		        $query = $db->prepare("SELECT user_id FROM users WHERE (username=:username) AND password=:password ");
		        $query->bindParam("username", $username, PDO::PARAM_STR);
		        $enc_password = hash('sha256', $password); //hash 256 type encrypte password text
		        $query->bindParam("password", $enc_password, PDO::PARAM_STR);
		        $query->execute();
		      if ($query->rowCount() > 0) {  // if found data = 1
		         $result = $query->fetch(PDO::FETCH_OBJ);
			echo "home.php";  //header url
		     return $result->user_id;

			} else {
				echo "invalid"; //error code showing javascript
				return false;
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage();
		}
	} else {
		echo "Both fields are required!";  //if empty 
	}
} else {
	header('location:./');
}
?>
