<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "hex_unitest";
	
		//baglan
	$conn = new mysqli($servername, $username, $password, $dbName);
	
		//kontrol
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "SELECT ID, Name, Money FROM tablo1";
	$result = mysqli_query($conn ,$sql);
	
	
	if(mysqli_num_rows($result) > 0){
		//goster
		while($row = mysqli_fetch_assoc($result)){
			echo "ID: ".$row['ID'] . "|Name: ".$row['Name']. " |Money: ".$row['Money'] . "<br>";
		}
	}
	
	
	
	


?>