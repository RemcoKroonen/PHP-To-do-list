<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Lijst/editSave" method="post">

		<input type="text" name="id" value="<?= $Lijst['id']; ?>">
		<input type="text" name="naam" value="<?= $Lijst['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $Lijst['omschrijving']; ?>">
		
		<input type="submit" value="Aanpassen">
	
	</form>

</div>
