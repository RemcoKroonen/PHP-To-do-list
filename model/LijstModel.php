<?php

function getLijst($id) 
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

	$sql = "SELECT MIN(id) AS eerste FROM lijsten;";
	$query = $db->prepare($sql);
	$query->execute();
	$eerste = $query->fetch();
	$_SESSION['EERSTELIJST'] = $eerste['eerste'];

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
	
	if (strlen($naam) == 0 || strlen($omschrijving) == 0) {
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

function getTakenForList($lijstid = null) 
{
	
	if ($lijstid == "-") {
		$lijstid = $_SESSION['EERSTELIJST'];
	}

	$db = openDatabaseConnection();

	$sql = "SELECT taken.*,statussen.naam AS statusnaam FROM taken INNER JOIN statussen ON taken.status_id = statussen.id WHERE lijst_id = :lijst_id";
	// $sql = "SELECT * FROM taken WHERE lijst_id = :lijst_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':lijst_id' => $lijstid));

	$db = null;

	return $query->fetchAll();
}

function createTaakForList() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$omschrijving = isset($_POST['omschrijving']) ? $_POST['omschrijving'] : null;
	$duur = isset($_POST['duur']) ? $_POST['duur'] : null;
	$status_id = isset($_POST['status_id']) ? $_POST['status_id'] : null;
	$lijst_id = $_SESSION['HUIDIGELIJST'];
	
	if (strlen($naam) == 0 || strlen($omschrijving) == 0 || strlen($duur) == 0 || strlen($status_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO taken(naam, omschrijving, duur, status_id, lijst_id) VALUES (:naam, :omschrijving, :duur, :status_id, :lijst_id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':omschrijving' => $omschrijving,
		':duur' => $duur,
		':status_id' => $status_id,
		':lijst_id' => $lijst_id));

	$db = null;
	
	return true;
}

function deletetaakvanLijst($id = null) 
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

function editTaakvanLijst() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$omschrijving = isset($_POST['omschrijving']) ? $_POST['omschrijving'] : null;
	$duur = isset($_POST['duur']) ? $_POST['duur'] : null;
	$status_id = isset($_POST['status_id']) ? $_POST['status_id'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	$lijst_id = $_SESSION['HUIDIGELIJST'];

	if (strlen($naam) == 0 || strlen($omschrijving) == 0 || strlen($duur) == 0 || strlen($status_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE taken SET naam = :naam, omschrijving = :omschrijving, duur = :duur, status_id = :status_id, lijst_id = :lijst_id WHERE id = :id";
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

function vulStatussen()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM statussen;";
	$query = $db->prepare($sql);
	$query->execute();

	$_SESSION['STATUSSEN'] = $query->fetchAll();

}