5<?php

function getTaak($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM taken WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllTaken() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM taken";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editTaak() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$omschrijving = isset($_POST['omschrijving']) ? $_POST['omschrijving'] : null;
	$duur = isset($_POST['naam']) ? $_POST['naam'] : null;
	$status_id = isset($_POST['naam']) ? $_POST['naam'] : null;
	$lijst_id = isset($_POST['naam']) ? $_POST['naam'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($naam) == 0 || strlen($omschrijving) == 0 || strlen($duur) == 0 || strlen($status_id) == 0 || strlen($lijst_id) == 0 || strlen($id) == 0){
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE taken SET naam = :naam, omschrijving = :omschrijving, duur = :duur, status_id = :status_id, lijst_id, = :lijst_id, id = :id WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':omschrijving' => $omschrijving,
		':duur' => $duur,
		':status_id' => $status_id,
		':lijst_id' => $status_id,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteTaak($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM taken WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createTaak() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$omschrijving = isset($_POST['omschrijving']) ? $_POST['omschrijving'] : null;
	$duur = isset($_POST['naam']) ? $_POST['naam'] : null;
	$status_id = isset($_POST['naam']) ? $_POST['naam'] : null;
	$lijst_id = isset($_POST['naam']) ? $_POST['naam'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($naam) == 0 || strlen($omschrijving) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO taken(naam, omschrijving, duur, status_id, lijst_id, id) VALUES (:naam, :omschrijving, :duur, :status_id, :lijst_id, :id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':omschrijving' => $omschrijving,
		':duur' => $duur,
		':status_id' => $status_id,
		':lijst_id' => $lijst_id,
		':id' => $id));

	$db = null;
	
	return true;
}
