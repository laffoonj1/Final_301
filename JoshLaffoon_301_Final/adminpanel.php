<?php
    
    include('config.php');

    $sql = file_get_contents('sql/memberOrders.sql');
	$params = array(  
	);
	$statement = $database->prepare($sql);
	$statement->execute();
	$memberOrders = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Admin Panel</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page" style="color:black; font-size:20px;">
		<h1>Members who have requested info:</h1>
        <?php foreach($memberOrders as $memberOrder) : ?>
				<li><?php echo '- Name: ' . $memberOrder['name'] ?><br>
                    <?php echo 'Email Address: ' . $memberOrder['address'] ?><br>
                    <?php echo 'Message: ' . $memberOrder['message'] ?><br>
                    <?php echo 'Product Name: ' . $memberOrder['productname'] ?><br><br><br>
                </li>
        <?php endforeach; ?>
		<a href="index.php"><button type="button">Go Back</button></a>
	</div>
</body>
</html>