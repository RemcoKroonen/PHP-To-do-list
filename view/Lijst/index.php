<div class="container">
	<form id="toonlijsten" action="<?= URL ?>lijst/index" method="post" >
		Kies lijst: 
		<select id="geselecteerdelijst" onchange="ReloadLijstIndex('<?= URL ?>')">
			<?php foreach ($lijsten as $lijst) { ?>
			<option value="<?= $lijst['id'];?>"  <?php if($lijst['id']==$_SESSION['HUIDIGELIJST']) echo " selected"?> ><?= $lijst['naam']?></option>
			<?php } ?>
		</select>
	</form>

	<a href="<?= URL ?>lijst/create">Toevoegen</a>
	<a href="<?= URL ?>lijst/edit/<?php echo $_SESSION['HUIDIGELIJST']; ?>" >Bewerken</a>
	<a href="<?= URL ?>lijst/delete/<?php echo $_SESSION['HUIDIGELIJST']; ?>" >Verwijderen</a>

	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Omschrijving</th>
			<th>Duur</th>
			<th>Status</th>
			<th colspan="2">Actie</th>

		</tr>
		<?php foreach($taken as $taak) { ?>
		<tr>
			<td><?=$taak['naam']?></td>
			<td><?=$taak['omschrijving']?></td>
			<td><?=$taak['duur']?></td>
			<td><?=$taak['statusnaam']?></td>
			<td><a href="<?= URL ?>lijst/edittaak/<?= $taak['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>lijst/deletetaak/<?= $taak['id'] ?>">Delete</a></td>

		</tr>
		<?php }?>
	</table>
	<a href="<?= URL ?>lijst/createTaak">Toevoegen taak</a>

</div>