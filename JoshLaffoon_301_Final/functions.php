<?php

function searchProd($searchTerm, &$database) {
	$sql = file_get_contents('sql/searchProducts.sql');
	$params = array(
		'searchTerm' => '%' . $searchTerm . '%'
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
    
    
	$searchproducts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $searchproducts;
}

function get($key) {
	if(isset($_GET[$key])) {
		return $_GET[$key];
	}
	
	else {
		return '';
	}
}

?>