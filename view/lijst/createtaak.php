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





<!-- 			<option value="1"">Klaar</option>
			<option value="2"">Gestart</option>
			<option value="3"">Gepland</option>
			<option value="4"">Nog beginnen</option>
 -->		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>