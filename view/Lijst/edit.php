<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Lijst/editSave" method="post">
	
		<input type="text" name="naam" value="<?= $naam['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $omschrijving['omschrijving']; ?>">
		
		<input type="submit" value="Verzenden">
	
	</form>

</div>
