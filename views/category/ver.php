<?php if (isset($categorys)) : ?>
    <h1><?= $categorys->name ?></h1>
    <?php if ($articles->num_rows == 0): ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>
		<?php while ($art = $articles->fetch_object()): ?>
			<div class="product">
				<a href="<?= URL ?>article/ver&id=<?= $art->id ?>">
					<?php if ($art->image != null): ?>
						<img src="<?= URL ?>uploads/images/<?= $art->image ?>" />
					<?php endif; ?>
					<h2><?= $art->titulo ?></h2>
				</a>
				<p><?= $art->descripcion ?></p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>
