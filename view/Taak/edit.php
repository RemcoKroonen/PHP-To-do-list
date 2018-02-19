<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Taak/editSave" method="post">

		<input type="text" name="id" value="<?= $Taak['id']; ?>">
		<input type="text" name="naam" value="<?= $Taak['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $Taak['omschrijving']; ?>">
		<input type="text" name="duur" value="<?= $Taak['duur']; ?>">
		<input type="text" name="status_id" value="<?= $Taak['status_id']; ?>">
		<input type="text" name="lijst_id" value="<?= $Taak['lijst_id']; ?>">
		
		<input type="submit" value="Aanpassen">
	
	</form>

</div>
