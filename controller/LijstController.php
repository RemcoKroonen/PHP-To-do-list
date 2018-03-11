<?php

require(ROOT . "model/LijstModel.php");

function index($id = "-")
{
	$_SESSION['HUIDIGELIJST'] = $id;
	render("lijst/index", array(
		'lijsten' => getAlllijsten(),
		'taken' => getTakenForList($id)
	));
}

function create()
{
	render("lijst/create");
}

function createSave()
{
	if (!createLijst()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "lijst/index");
}

function edit($id)
{
	render("lijst/edit", array(
		'lijst' => getLijst($id)
	));
}

function editSave()
{
	if (!editLijst()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "lijst/index");
} 

function delete($id)
{
	if (!deleteLijst($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "lijst/index");
}

function createTaak()
{
	vulStatussen();
	render("lijst/createtaak");
}

function createSaveTaak()
{
	if (!createTaakForList()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "lijst/index");
}

function deletetaak($id)
{
	if (!deletetaakvanLijst($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "lijst/index");
}

function edittaak($id)
{
	vulStatussen();
	render("lijst/edittaak", array(
		'taak' => getTaak($id)
	));
}

function editSavetaak()
{
	if (!editTaakvanLijst()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "lijst/index");
} 