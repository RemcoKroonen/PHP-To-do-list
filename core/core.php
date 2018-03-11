<?php

function openDatabaseConnection() 
{
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
	
	$db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);

	return $db;
}


function render($filename, $lijstdata = null, $taakdata = null)
{
	if ($lijstdata) {

		foreach($lijstdata as $key => $value) {
			$$key = $value;
		}
	} 

	if ($taakdata) {

		foreach($taakdata as $key => $value) {
			$$key = $value;
		}
	}

	require(ROOT . 'view/templates/header.php');
	require(ROOT . 'view/' . $filename . '.php');
	require(ROOT . 'view/templates/footer.php');
}