<div class="container">
	<table border="1">
		<tr>
			<th>id</th>
			<th>Naam</th>
			<th>Omschrijving</th>
			<th>Duur</th>
			<th>Status_id</th>
			<th>Lijst_id</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($Taken as $taak) { ?>
		<tr>
			<td><?= $taak['id']; ?></td>
			<td><?= $taak['naam']; ?></td>
			<td><?= $taak['omschrijving']; ?></td>
			<td><?= $taak['duur']; ?></td>
			<td><?= $taak['status_id']; ?></td>
			<td><?= $taak['lijst_id']; ?></td>
			<td><a href="<?= URL ?>Taak/edit/<?= $taak['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>Taak/delete/<?= $taak['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>Taak/create">Toevoegen</a>
</div>