5<?php

function getlijst($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lijsten WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllLijsten() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lijsten";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editLijst() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$omschrijving = isset($_POST['omschrijving']) ? $_POST['omschrijving'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($naam) == 0 || strlen($omschrijving) == 0 || strlen($id) == 0){
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE lijsten SET naam = :naam, omschrijving = :omschrijving WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':omschrijving' => $omschrijving,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteLijst($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM lijsten WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createLijst() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$omschrijving = isset($_POST['omschrijving']) ? $_POST['omschrijving'] : null;
	
	if (strlen($naam) == 0 || strlen($omschrijving) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO lijsten(naam, omschrijving) VALUES (:naam, :omschrijving)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':omschrijving' => $omschrijving));

	$db = null;
	
	return true;
}
