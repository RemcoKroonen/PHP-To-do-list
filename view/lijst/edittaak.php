<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>lijst/editSavetaak" method="post">
	
		<input type="text" name="naam" value="<?= $taak['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $taak['omschrijving']; ?>">
		<input type="number" name="duur" value="<?= $taak['duur']; ?>">
		<input type="text" name="status_id" value="<?= $taak['status_id']; ?>">
		
		<input type="hidden" name="id" value="<?= $taak['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
