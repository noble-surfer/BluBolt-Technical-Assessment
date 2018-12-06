<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		BluBolt Technical Assessment
	</head>
	<body>
		<h1>Enquiry Details</h1>

		<p>The details of the enquiry submitted are: </p>
		<table id="EnquiryDetails>
			<tr>
				<td><b>Customer Name</b></td><td><b>Customer Email</b></td><td><b>Query</b></td>
			</tr>
			<tr>
				<td>customerName</td><td>customerEmail</td><td>enquiryText</td>
			</tr>
		</table>
	</body>
</html>

<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "mydb";
	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname, $username, $password);
		//Set the PDF error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO Enquiries (name, email, query)
		VALUES (customerName, customerEmail, enquiryText)";
		$conn->exec($sql);
		echo "New record created successfully";
	}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	
	$conn = null;
?>
