<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>lijst/editSave" method="post">
	
		<input type="text" name="naam" value="<?= $lijst['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $lijst['omschrijving']; ?>">
		
		<input type="hidden" name="id" value="<?= $lijst['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
