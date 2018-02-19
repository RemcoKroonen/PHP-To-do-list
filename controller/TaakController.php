<?php

require(ROOT . "model/TaakModel.php");

function index()
{
	render("Taak/index", array(
		'Taken' => getAllTaken()
	));
}

function create()
{
	render("Taak/create");
}

function createSave()
{
	if (!createTaak()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Taak/index");
}

function edit($id)
{
	render("Taak/edit", array(
		'Taak' => getTaak($id)
	));
}

function editSave()
{
	if (!editTaak()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Taak/index");
} 

function delete($id)
{
	if (!deleteTaak($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Taak/index");
}
