<div class="topContainer">
    <h1>Présentation</h1>
</div>

<hr>

<div class="nav">
    <a href="<?= $router->generate('home'); ?>">Home</a> <!-- $router->generate(''); calling route from index.php -->
    <a href="<?= $router->generate('presentation'); ?>">Présentation</a>
    <a href="<?= $router->generate('realisations'); ?>">Réalisations</a>
</div>

<div class="botContainer">

    <div class="blocLeft">
        <div class="Content">
            <div class="about">
                <p>Qui suis je, mes expériences ...</p>
            </div>
        </div>
    </div>

    <div class="blocRight">
        <div class="Content">
            <div class="futur">
                <p>J'ambitionne de...</p>
            </div>
        </div>
    </div>

    
</div>