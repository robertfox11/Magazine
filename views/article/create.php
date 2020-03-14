<?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>
	<h1>Editar producto <?= $pro->nombre ?></h1>
	<?php $url_action = URL . "article/saveArticleController&id=" . $pro->id; ?>

<?php else : ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = URL . "article/saveArticleController"; ?>
<?php endif; ?>

<div class="form_container">

	<form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
		<label for="titulo">Title</label>
		<input type="text" name="titulo" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" />

		<label for="descripcion">Description</label>
		<textarea name="descripcion"><?= isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
		<label for="categoria">Categoria</label>
		<?php $categorias = Util::showCategory(); ?>
		<select name="categoria">
			<?php while ($cat = $categorias->fetch_object()) : ?>
				<option value="<?= $cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>

		<label for="imagen">Imagen</label>
		<?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)) : ?>
			<img src="<?= URL ?>uploads/images/<?= $pro->imagen ?>" class="thumb" />
		<?php endif; ?>
		<input type="file" name="imagen" />

		<input type="submit" value="Guardar" />
	</form>
</div>