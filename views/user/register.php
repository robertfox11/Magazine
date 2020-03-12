<h1>Register</h1>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Util::deleteSession('register'); ?>
<div class="chief mb-5">
<form action="<?= URL ?>user/saveUser" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" name="name" required />
    </div>
    <div class="form-group">
        <label for="lastname">LastName</label>
        <input type="lastname" name="lastname" required />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <input  class="btn btn-primary mb-2" type="submit" value="Entrar" />
</form>
</div>