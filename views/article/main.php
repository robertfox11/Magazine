    <!-- principal -->
    <?php $articles = Util::showArticle(); ?>
    <?php while ($com = $articles->fetch_object()) : ?>
    <div class="d-flex flex-wrap justify-content-center mx-auto my-3 col-md-6">
        
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="<?= URL ?>uploads/images/<?= $com->image ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mbr-fonts-style align-center display-5"><?= $com->titulo ?></h5>
                        <p class="mbr-text mbr-fonts-style align-center mbr-light"><?= $com->descripcion ?></p>
                        <p class="card-text"><small class="text-muted"><?= $com->categoriaName . ' | ' . $com->fecha ?></small></p>
                        <?php if (isset($_SESSION['admin'])) : ?>
                            <a href="<?= URL ?>article/updateArtcle&id=<?= $com->id; ?>"" class=" button button-small category category-green">Editar</a>
                            <a href="<?= URL ?>article/deleteArticle&id=<?= $com->id; ?>" class="button button-small category category-blue">Delete</a>
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        
    </div>
    <?php endwhile; ?>