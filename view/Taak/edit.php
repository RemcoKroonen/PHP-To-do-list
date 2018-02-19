<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Taak/editSave" method="post">

		<input type="text" name="id" value="<?= $taak['id']; ?>">
		<input type="text" name="naam" value="<?= $taak['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $taak['omschrijving']; ?>">
		<input type="text" name="duur" value="<?= $taak['duur']; ?>">
		<input type="text" name="status" value="<?= $taak['status_id']; ?>">
		<input type="text" name="lijst" value="<?= $taak['lijst_id']; ?>">
		
		<input type="submit" value="Aanpassen">
	
	</form>

</div>
