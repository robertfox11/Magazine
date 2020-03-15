<?php if (isset($edit) && isset($upd) && is_object($upd)) : ?>
    <h1>Editar News <?= $upd->titulo ?></h1>
    <?php $url_action = URL . "article/saveArticleController&id=" . $upd->id; ?>
<?php else : ?>
    <h1>Crear News</h1>
    <?php $url_action = URL . "article/saveArticleController"; ?>
<?php endif ?>

<?php if(isset($_SESSION['article']) && $_SESSION['article'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['article']) && $_SESSION['article'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha creado correctamente</strong>
<?php endif; ?>
<?php Util::deleteSession('article'); ?>

<div id="register">
    <form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
        <label for="categoria_id">Category</label>
        <select name="categoria_id" required>
            <?php $categorys = Util::showCategory(); ?>
            <?php while ($cat = $categorys->fetch_object()) : ?>
                <option type="number" value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
            <?php endwhile; ?>
        </select>
        <label for="titulo">Title</label>
        <input type="text" name="titulo" required value="<?= isset($upd) && is_object($upd) ? $upd->titulo : ''; ?>"><br>
        <textarea name="descripcion" type="text" required><?= isset($upd) && is_object($upd) ? $upd->descripcion : ''; ?></textarea><br>
        <label for="image">Imagen</label>
		<?php if (isset($upd) && is_object($upd) && !empty($upd->image)) : ?>
			<img src="<?= URL ?>uploads/images/<?= $upd->image ?>"  width ="10%"alt="Card image cap"/>
		<?php endif; ?>
		<input type="file" name="image" />

        <input type="submit" value="Guardar" />
    </form>
</div>