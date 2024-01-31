<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	// $project = $_POST['project'];
	$message = $_POST['message'];
	

	// Database connection

	$conn = mysqli_connect("localhost", "root", "", "portfolio") or die("connection failed!" . $conn->connect_error);

	$sql = "INSERT INTO data(name, email, message) VALUES ('$name', '$email', '$message')";

	$result = mysqli_query($conn, $sql) or die("query unsuccessful!" . $conn->connect_error);

	echo "Registration successfully...";

	$conn->close();




// if (isset($_POST['submit'])){

// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	// $project = $_POST['project'];
// 	$message = $_POST['message'];


// 	// Database connection

// 	$conn = mysqli_connect("localhost", "root", "", "portfolio") or die("connection failed!" . $conn->connect_error);

// 	$sql = "INSERT INTO data(name, email, message) VALUES ('$name', '$email', '$message')";

// 	$result = mysqli_query($conn, $sql) or die("query unsuccessful!" . $conn->connect_error);
	
// 	$conn->close();
	
// }


	// $conn = new mysqli('localhost','root','','demo');
	// if($conn->connect_error){
	// 	echo "$conn->connect_error";
	// 	die("Connection Failed : ". $conn->connect_error);
	// } else {
	// 	$stmt = $conn->prepare("insert into registration(name, email, project, message) values(?, ?, ?, ?)");
	// 	$stmt->bind_param("ssss", $firstName, $lastName, $gender, $email, $password, $number);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo "Registration successfully...";
	// 	$stmt->close();
	// 	$conn->close();
	// }
?>