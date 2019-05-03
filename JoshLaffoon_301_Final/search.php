<?php

include('config.php');

if (isset($_GET['search-term'])){
    $searchTerm = $_GET['search-term'];
    
}else {
    $searchTerm = ''; 
}

$searchproducts = searchProd($searchTerm, $database);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<title>Search Products</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<link rel="stylesheet" href="css/style.css">
    
</head>
<body>
	<div class="page" style='color:black; font-size:20px;'>
		<h1>Products</h1>
		<form method="GET">
			<input type="text" name="search-term" placeholder="Search..." />
			<input type="submit" />
		</form>

		<?php if(!empty($searchproducts)) :?>
            <?php foreach($searchproducts as $searchproduct) : ?> 
                <p><?php echo $searchproduct['productname'] . ':  ' . '$' . $searchproduct['price'] ?></p>
        <?php endforeach; ?>
        <p><a href="infoform.php?action=add" class="btn btn-primary btn-outline btn-lg">Request Info</a>&nbsp;<a href="index.php" class="btn btn-primary btn-outline btn-lg">Go Back</a></p>
        <?php else : ?>
            <p> No results found</p>
        <?php endif; ?>
	</div>
</body>
</html>