<?php

include('config.php');

$action = $_GET['action'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$message = $_POST['message'];
    $name = $_POST['name'];
    $productname = $_POST['product-name'];
    $address = $_POST['address'];
	if($action == 'add') {
        $sql = file_get_contents('sql/insertMessage.sql');
        $params = array(
            'message' => $message,
            'name' => $name,
            'productname' => $productname,
            'address' => $address
        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
	}
	
    header('location:index.php');
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Leave A Message</title>
	<meta name="description">
	<meta name="author">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="page" style="color:black; font-size:20px;">
		<h1>Request Info</h1>
		<form action="" method="POST">
			<div class="form-element">
				<label>Name:</label>
				<input type="text" name="name" class="textbox"/>
			</div>
            <div class="form-element">
				<label>Email Address:</label>
				<input type="text" name="address" class="textbox" />
			</div>
            <div class="form-element">
				<label>Product Name:</label>
				<input type="text" name="product-name" class="textbox" />
			</div>
            <div class="form-element">
				<label>Message:</label>
				<input type="text" name="message" class="textbox" />
			</div>
			<div class="form-element">
				<input type="submit" class="button" />&nbsp;
				<input type="reset" class="button" />
			</div>
		</form>
        <div>
            <p><a href="index.php" class="btn btn-primary btn-outline btn-lg">Go Back</a></p>
        </div>
	</div>
</body>
</html>