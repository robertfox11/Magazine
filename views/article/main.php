    <!-- principal -->
    <?php $articles = Util::showArticle(); ?>
    <div class="d-flex flex-wrap justify-content-center mx-auto col-md-12">
        <?php while ($com = $articles->fetch_object()) : ?>
            <div class="mb-4 card-desk col-md-6 text-center">
                <div class="mb-1 cards">
                    <img class="card-img-top" width="160px" src="<?= URL ?>uploads/images/<?= $com->image ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mbr-fonts-style align-center display-5"><?= $com->titulo ?></h5>
                        <p class="mbr-text mbr-fonts-style align-center mbr-light"><?= $com->descripcion ?></p>
                        <p class="card-text"><small class="text-muted"><?= $com->categoriaName . ' | ' . $com->fecha ?></small></p>
                        <?php if (isset($_SESSION['admin'])) : ?>
                            <a href="<?= URL ?>article/updateArticle&id=<?= $com->id; ?>"" class=" button button-small category category-green">Editar</a>
                            <a href="<?= URL ?>article/deleteArticle&id=<?= $com->id; ?>" class="button button-small category category-blue">Delete</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>