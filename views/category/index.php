<h1>Gestionar categorias</h1>
<a href="<?= URL ?>category/entry" class="button button-small">
	Crear categoria
</a>
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha borrado correctamente</strong>
<?php endif; ?>
<?php Util::deleteSession('delete'); ?>
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>Acciones</th>
	</tr>
	<?php while ($cat = $categorys->fetch_object()) : ?>
		<tr>
			<td><?= $cat->id; ?></td>
			<td><?= $cat->name; ?></td>
			<td>
				<a href="<?= URL ?>category/updateCategory&id=<?= $cat->id; ?>"" class=" button button-small category category-green">Editar</a>
				<a href="<?= URL ?>category/deleteCategory&id=<?= $cat->id; ?>" class="button button-small category category-blue">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>