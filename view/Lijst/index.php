<div class="container">
	<table border="1">
		<tr>
			<th>id</th>
			<th>Naam</th>
			<th>Omschrijving</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($lijsten as $lijst) { ?>
		<tr>
			<td><?= $lijst['id']; ?></td>
			<td><?= $lijst['naam']; ?></td>
			<td><?= $lijst['omschrijving']; ?></td>
			<td><a href="<?= URL ?>Lijst/edit/<?= $lijst['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>Lijst/delete/<?= $lijst['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>Lijst/create">Toevoegen</a>
</div>