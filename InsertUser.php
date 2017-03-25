<?php
	$servername = "localhost";
	$server_username = "root";
	$server_password = "";
	$dbName = "hex_unitest";
	
	//Variable from the user	
	$username = $_POST["usernamePost"]; 
	$email = $_POST["emailPost"];
	$password = $_POST["passwordPost"];
	
	//Make Connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO users (username, email, password)
			VALUES ('".$username."','".$email."','".$password."')";
	$result = mysqli_query($conn ,$sql);
	
	if(!result) echo "there was an error";
	else echo "Everything ok.";

?>