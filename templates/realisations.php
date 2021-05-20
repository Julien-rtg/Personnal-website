<div class="topContainer">
    <div class="titre titleAlone">
        <h1>Réalisations</h1>
    </div>
</div>
<hr>

<div class="nav">
    <a href="<?= $router->generate('home'); ?>">Accueil</a> <!-- $router->generate(''); calling route from index.php -->
    <a href="<?= $router->generate('presentation'); ?>">Présentation</a>
    <a href="<?= $router->generate('realisations'); ?>">Réalisations</a>
</div>
<hr>
<div class="navRealisations">
    <a href="<?= $router->generate('realisationsMLS'); ?>">MyLovelySushi</a>
</div>