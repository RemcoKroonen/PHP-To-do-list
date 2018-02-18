<?php

require(ROOT . "model/LijstModel.php");

function index()
{
	render("Lijst/index", array(
		'lijsten' => getAlllijsten()
	));
}

function create()
{
	render("Lijst/create");
}

function createSave()
{
	if (!createLijst()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Lijst/index");
}

function edit($id)
{
	render("Lijst/edit", array(
		'lijst' => getLijst($id)
	));
}

function editSave()
{
	if (!editLijst()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Lijst/index");
} 

function delete($id)
{
	if (!deleteLijst($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Lijst/index");
}
