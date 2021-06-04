<div class="topContainer">
    <div class="titre titleAlone">
        <h1>Réalisations</h1>
    </div>
</div>
<hr id="hrNav">

<div class="nav">
    <a href="<?= $router->generate('home'); ?>">Accueil</a> <!-- $router->generate(''); calling route from index.php -->
    <a href="<?= $router->generate('presentation'); ?>">Présentation</a>
    <a href="<?= $router->generate('realisations'); ?>">Réalisations</a>
    <a href= <?= $var->switch() . "/img/CV_Julien_Rittling.pdf" ?> download="CV_Julien_Rittling">CV :
    <img src= <?= $var->switch() . "/img\downloadupdates_theapplication_thearrow_descarg_2915.png" ?> alt=""></a>
</div>

<div class="botContainer">

    <div class="listRealisations firstBlocMargin">

        <div class="card  botPage">
            <img src="img\imgMLS\pageAccueil1.png" class="card-img-top">
            <div class="card-body">
                <p class="card-text"> Site pour restaurant de sushi, en PHP natif </p>
                <p class="card-text">
                    <strong>Fonctionnalités :</strong>
                    <ul>
                        <span id="textStyle">
                            <li>Menu en ligne affichants les produits</li>
                            <li>Création d'un panier</li>
                            <li>Page Contact</li>
                            <li>Page Admin (gérer les produits (créer, modifier, supprimer))</li>
                        </span>
                    </ul>
                </p>
                <p class="card-text linkRealisations">Github :</p>
                <div class="blocLinkA">
                    <a href="https://github.com/Julien-rtg/MLS" class="card-text linkA" target="_blank">github.com/Julien-rtg/MLS</a>
                </div>
                <p class="card-text linkRealisations">Site :</p>
                <div class="blocLinkA">
                    <a href="https://mylovelysushi.fr/" class="card-text linkA" target="_blank">mylovelysushi.fr</a>
                </div>
            </div>
        </div>

        <div class="card  botPage">
            <img src="img\firstProjectSymfony.png" class="card-img-top">
            <div class="card-body">
                <p class="card-text"> Blog réalisé sous Symfony </p>
                <p class="card-text">
                    <strong>Fonctionnalités :</strong>
                    <ul>
                        <span id="textStyle">
                            <li>Afficher articles</li>
                            <li>Création d'article, modification</li>
                            <li>Espace connexion</li>
                            <li>Espace commentaire sous articles</li>
                        </span>
                    </ul>
                </p>
                <p class="card-text linkRealisations">Github :</p>
                <div class="blocLinkA">
                    <a href="https://github.com/Julien-rtg/DemoSymfony" class="card-text linkA" target="_blank">github.com/Julien-rtg/DemoSymfony</a>
                </div>
            </div>
        </div>
        
        

    </div>
</div>


<!-- <hr>
 <div class="navRealisations">
    <a href=" $router->generate('realisationsMLS'); ">MyLovelySushi</a>
</div> -->

