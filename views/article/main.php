    <!-- principal -->
    <?php $articles = Util::showArticle(); ?>
    <?php while ($com = $articles->fetch_object()) : ?>
        <div class="d-flex flex-wrap justify-content-center mx-auto my-3 col-md-10">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mbr-fonts-style align-center display-5"><?= $com->titulo ?></h5>
                        <p class="mbr-text mbr-fonts-style align-center mbr-light display-7"><?= $com->descripcion ?></p>
                        <p class="card-text"><small class="text-muted"><?= $com->categoriaName . ' | ' . $com->fecha ?></small></p>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>