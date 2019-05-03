<?php

include('config.php');

$action = $_GET['action'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
	if($action == 'add') {
        $sql = file_get_contents('sql/subscribe.sql');
        $params = array(
            'name' => $name,
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
	
  	<title>Subscribe</title>
	<meta name="description">
	<meta name="author">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="page" style="color:black; font-size:20px;">
		<h1>Subscribe To Our Newsletter!</h1>
		<form action="" method="POST">
			<div class="form-element">
				<label>Name:</label>
				<input type="text" name="name" class="textbox" />
			</div>
            <div class="form-element">
				<label>Email Address:</label>
				<input type="text" name="address" class="textbox" />
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