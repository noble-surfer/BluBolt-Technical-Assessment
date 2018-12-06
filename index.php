<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		BluBolt Technical Assessment
	</head>
	<body>
		<script>var customerName, customerEmail, enquiryText</script>
		<h1>Customer Information</h1>

		<form id="customerInfoForm" accept-charset = "utf-8" action = "insert.php" method = "post" >
			<table id = "customerInfoTable">
				<tr><td>Name: </td><td><input type = "text" name = document.getElemenyById("customerName") ></input></td></tr>
				<tr><td>Email: </td><td><input type = "text" name = "customerEmail"></input></td></tr>
				<tr><td>Enquiry: </td><td><input type = "text" name = "enquiryText"></input></td></tr>
			</table>
			<br>
			<input type = "submit" value = "Sumit"></input>
		</form>
	</body>
</html>

<?php
$con = mysql_connect('localhost','[retracted]','[retracted]');

if(!$con) {
	echo 'Not connected to server!';
}

$Name = $_POST['customerName'];
$Email = $_POST['customerEmail'];
$Query = $_POST['enquiryText'];

$sql = "INSERT INTO Enquiries(Name, Email, Query) VALUES ('$Name', '$Email', '$Query')";
if(!mysql_query($con, $sql)) {
	echo 'Data not inserted';
} else {
	echo 'Data inserted';
}

?>