<h1>Gestionar categorias</h1>

<a href="<?=URL?>article/entry" class="button button-small">
	Crear categoria
</a>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->nombre;?></td>
			<td>
				<a href="<?= URL ?>category/updateCategory&id=<?= $cat->id; ?>"" class=" button button-small category category-green">Editar</a>
				<a href="<?= URL ?>category/deleteCategory&id=<?= $cat->id; ?>" class="button button-small category category-blue">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>
