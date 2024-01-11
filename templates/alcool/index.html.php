<h1>Voici mes alcools :</h1>

<hr>

<?php foreach ($alcools as $alcool): ?>
    <div class="card mt-5">
        <div class="card-body">
            <h1 class="card-title"><?= $alcool->getName() ?></h1>
            <h4 class="card-subtitle mt-3"><?= $alcool->getDescription() ?></h4>
            <h5 class="card-subtitle mt-3"><?= $alcool->getDegree()?> degré</h5>
            <a href="?type=alcool&action=show&id=<?= $alcool->getId() ?>" class="btn btn-success mt-3">Voir</a>
            <a href="?type=alcool&action=delete&id=<?= $alcool->getId() ?>" class="btn btn-danger mt-3">Supprimer</a>
        </div>
    </div>


<?php endforeach; ?>

