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
    <a href= <?= $var->switch() . "/img/CV_Julien_Rittling.pdf" ?> download="CV_Julien_Rittling">CV :
    <img src= <?= $var->switch() . "/img\downloadupdates_theapplication_thearrow_descarg_2915.png" ?> alt=""></a>
</div>
<hr>
<div class="navRealisations">
    <a href="<?= $router->generate('realisationsMLS'); ?>">MyLovelySushi</a>
</div>