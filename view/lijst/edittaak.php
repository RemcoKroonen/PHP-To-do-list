<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>lijst/editSavetaak" method="post">
	
		<input type="text" name="naam" value="<?= $taak['naam']; ?>">
		<input type="text" name="omschrijving" value="<?= $taak['omschrijving']; ?>">
		<input type="number" name="duur" value="<?= $taak['duur']; ?>">
		<select name="status_id">
			<?php foreach ($_SESSION['STATUSSEN'] as $status) { ?>
			<option value="<?= $status['id'];?>"><?= $status['naam']?></option>
			<?php } ?>
		</select>
		
		<input type="hidden" name="id" value="<?= $taak['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
