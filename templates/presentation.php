<div class="topContainer">
    <div class="titre titleAlone">
        <h1>Présentation</h1>
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

<div class="botContainer">

    <div class="blocLeft">
        <div class="Content">
            <div class="about">
                <h3>A propos de moi :</h3>
                <div class="description">
                <p>Je suis actuellement à la <span id="textStyle">recherche</span> d'une entreprise sur <span id="textStyle">Toulouse</span> et alentours pouvant m'accueillir pour une <span id="textStyle">alternance</span>
                    sur 24 mois avec OpenClassrooms de niveau Bac+3/4 dans le <span id="textStyle">développement Web PHP / Symfony.</span></p>
                <p>J'ai effectué une première <span id="textStyle">formation de Développeur Web PHP de niveau Bac+2</span>, où j'ai appris les bases du développement Web 
                dans les langages <span id="textStyle">HTML/CSS/SQL/PHP en orienté objet</span>, sur les outils de versionning tels que <span id="textStyle">Github</span>,
                  sur les environnement wamp/phpmyadmin.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="blocRight botPage">
        <div class="Content">
            <div class="futur">
                <h3>Ambitions :</h3>
                <div class="description">
                    <p>J'ambitionne de devenir <span id="textStyle">Développeur Full-Stack</span> avec les technologies Javascript et PHP.</p>
                    <p>Avant çela il faut que je me perfectionne sur le back-end avec PHP et sur le framework Symfony 5!</p>
                </div>
            </div>
        </div>
    </div>

    
</div>