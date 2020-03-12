    <!-- principal -->
    <?php $articles = Util::showArticle(); ?>
    <?php while ($com = $articles->fetch_object()) : ?>
        <div class="d-flex flex-wrap justify-content-center mx-auto my-3 col-md-12">
            <div class="card-deck mx-auto col-md-3 text-center">
                <div class="mb-1 cards">
                    <a href="<?= URL ?>article/ver&id">
                        <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                        <div class="card-body">
                            <h3 class=" card-title"><?= $com->titulo ?></h3>
                            <p class=""><?= $com->descripcion ?></p>
                            <span><?= $com->categoriaName . ' | ' . $com->fecha ?></span>
                        </div>
                        <button class="btn btn-warning" href="<?= URL ?>article/updateComments&id=<?= $com->id; ?>"" class=" button button-small category category-green">Editar</button>
                        <button class="btn btn-danger" href="<?= URL ?>article/deleteComments&id=<?= $com->id; ?>" class="button button-small category category-blue">Delete</button>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
        <!-- <div class="d-flex flex-wrap justify-content-center mx-auto my-3 col-md-12">
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
        <div class="card-deck mx-auto col-md-3 text-center">
            <div class="mb-1 cards">
                <img src="assets/img/services/cheque-dej.jpg" class="card-img-top" alt="responsive-img">
                <div class="card-body">
                    <h5 class=" card-title">Check lunch</h5>
                    <p class="">La ventaja social preferida por los clientes y los empleados</p>
                </div>
            </div>
        </div>
    </div> -->