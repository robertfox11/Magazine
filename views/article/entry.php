<?php if (isset($edit) && isset($upd) && is_object($upd)) : ?>
    <h1>Editar Category <?=$upd->name?></h1>
    <?php $urlAction = URL . "category/update&id".$upd->id; ?>
<?php else : ?>
    <h1>Crear Nueva Category</h1>
    <?php $urlAction = URL . "category/saveCategory"; ?>
<?php endif ?>

<form action="<?= $urlAction ?>" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?=isset($upd) && is_object($upd) ? $upd->name : ''; ?>">
    <input type="submit" value="Guardar" />
</form>