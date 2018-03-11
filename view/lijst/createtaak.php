<div class="container">
	<form action="<?= URL ?>lijst/createSaveTaak" method="post">
	
		<input type="text" name="naam" placeholder="Taaknaam">
		<input type="text" name="omschrijving" placeholder="Taakomschrijving">
		<input type="number" name="duur" placeholder="Duur">
		<!-- <input type="text" name="status_id" placeholder="StatusId"> -->
		<select name="status_id">
			<?php foreach ($_SESSION['STATUSSEN'] as $status) { ?>
			<option value="<?= $status['id'];?>"><?= $status['naam']?></option>
			<?php } ?>
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>