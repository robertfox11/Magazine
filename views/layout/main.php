<main class="container bg-light flex-grow-1">
    <!-- lateral -->
    <aside id="asideLogin">
        <div id="login" class="blockAside">
            <?php if (!isset($_SESSION['identity'])) : ?>
                <h3>Entrar en la Web</h3>
                <form action="<?= URL ?>usuario/login" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <input type="submit" value="Entrar" />
                </form>
            <?php else : ?>
                <h3><?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->lastname ?></h3>
            <?php endif; ?>
            <div>
                <?php if (isset($_SESSION['admin'])) : ?>
                    <a href="<?= URL ?>category/entry" class="category category-blue">Crear Category</a>
                    <a href="<?= URL ?>category/index" class="category category-blue">Show Category</a>

                    <a href="<?= URL ?>comments/index" class="category category-green">Editar Comemnts Category</a>
                <?php endif; ?>
                <?php if (isset($_SESSION['identity'])) : ?>
                    <a href="<?= URL ?>comments/entry" class="category category-green">Crear Comments</a>
                    <a class="category category-blue" href="<?= URL ?>usuario/logout">Logout</a>
                    <a href="" class="category category-orange">Mis Datos</a>
                <?php else : ?>
                    <a href="<?= URL ?>usuario/register">Registrese aqui</a>
                <?php endif; ?>

            </div>
        </div>
    </aside>
    <!-- principal -->
    <div class="card-deck my-3">
        <div class="card">
            <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
            <div class="card-body">
                <h5 class="card-title">Check lunch</h5>
                <p class="">La ventaja social preferida por los clientes y los empleados</p>
                <a href="CheckLunch.html" class="btn btn_main">Button</a>
            </div>
        </div>
        <div class="card">
            <img src="assets/img/services/cheque-do.jpg" class="card-img-top" alt="responsive-img">
            <div class="card-body ">
                <h5 class="card-title">Cadhoc</h5>
                <p class="card-text">Acceso a todo tipo de bienes de consumo y bienestar.</p>
                <a href="Cadhoc.html" class="btn btn_main">Button</a>
            </div>
        </div>
        <div class="card">
            <img src="assets/img/services/cadeau.jpg" class="card-img-top" alt="responsive-img">
            <div class="card-body">
                <h5 class="card-title">House Check</h5>
                <p class="card-text">Disfrutar de muchos servicios para la persona. </p>
                <a href="houseCheck.html" class="btn btn_main">Button</a>
            </div>
        </div>
    </div>