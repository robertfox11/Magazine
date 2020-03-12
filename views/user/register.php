<h1>Register</h1>

<!-- index.php?controller=usuario&action=saveUser -->
<div class="chief mb-5">
<form action="<?= URL ?>usuario/saveUser" method="POST">
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