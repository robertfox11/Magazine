<h1>Show News</h1>
<a href="<?= URL ?>article/entry" class="button button-small">
	Crear News
</a>
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>Acciones</th>
	</tr>
	<?php while ($cat = $articles->fetch_object()) : ?>
		<tr>
			<td><?= $cat->id; ?></td>
			<td><?= $cat->titulo; ?></td>
			<td>
				<a href="<?= URL ?>article/updateArticle&id=<?= $cat->id; ?>"" class=" button button-small category category-green">Editar</a>
				<a href="<?= URL ?>article/deleteArticle&id=<?= $cat->id; ?>" class="button button-small category category-blue">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>