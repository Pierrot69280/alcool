<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?= $alcool->getName() ?></h1>
        <h4 class="card-subtitle mt-3"><?= $alcool->getDescription() ?></h4>
        <h5 class="card-subtitle mt-3"><?= $alcool->getDegree()?> degré</h5>
        <a href="?type=alcool&action=index" class="btn btn-outline-secondary mt-3">Retour</a>
    </div>
</div>
