<?php

	$name=$_POST['name'];
	$phone=$_POST['tel'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learning";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    

    $sql = "INSERT INTO requests (name, phone, email, comment) VALUES ('$name', '$phone', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) $response = "New record created successfully";
    else $response = "Error: " . $sql . "<br>" . $conn->error;
    
    $conn->close();
    return json_encode($response);

?>