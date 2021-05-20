<?php require_once 'templates/realisations.php'; ?>

<div class="btnSite">
    <a href="https://www.mylovelysushi.fr" class="btn btn-success" target="_blank">Visiter le site</a>
</div>

<div class="botContainer">

    <div class="blocLeft">
        <div class="Content">
            <div class="presProjet">
                <h3>Projet de l'entreprise :</h3>
                <div class="description">
                    <p>L’activité principale de My Lovely Sushi est la restauration cambodgienne et japonaise, elle propose diverses gammes de produits.</p>
                    <p>La société souhaite avoir plus de visibilité et s’étendre sur plusieurs plateformes afin d’attirer
                        plus de personnes. Elle désire donc développer un site internet où les clients pourront
                        <span id="textStyle">consulter les produits.</span> Les principales fonctionnalités du site internet
                        seront un menu en ligne affichant les produits ainsi qu'une <span id="textStyle">page Admin pour gérer les produits.</span></p>
                    </div>
                </div>
                
        </div>
    </div>

    <div class="blocRight">
        <div class="Content">
            <div class="besoin">
                <h3>Compétences couvertes par le projet :</h3>
                <div class="description">
                    <ul>
                        <span id="textStyle">
                            <li>Conception graphique</li>
                            <li>Intégration HTML-CSS</li>
                            <li>Création base de données</li>
                            <li>Développement sous PHP orienté objet, MySQL</li>
                            <li>Animation avec Javascript (AJAX)</li>
                            <li>Site responsive</li>
                        </span>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="blocLeft">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Accueil :</strong></p>
                    <p>La page d'accueil sert <span id="textStyle">d'accès rapide aux produits</span> présentés par le restaurant, elle permet 
                        de choisir quels types de produits vous voulez consulter. On peut retrouver un menu de navigation dépliant
                        qui sera présent sur l'intégralité du site.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/pageAccueil1.png" ?> alt="">
            </div>
        </div>
    </div>

    <div class="blocRight">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Tous les produits :</strong></p>
                    <p>Cette page se découpe en plusieurs parties, il y a <span id="textStyle">tous 
                        les produits du restaurant recensé et découpé en plusieurs catégories</span>. En cliquant
                        sur un produit on peut soit <span id="textStyle">ajouter au panier, soit afficher les details des produits</span> 
                        qui affichera une fenetre pour afficher la description.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/tousLesProduits1.png" ?> alt="">
            </div>
        </div>
    </div>
    
    <div class="blocLeft">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Contact :</strong></p>
                    <p>La page contact permet l'envoi de mail, tous les champs doivent être remplis et renvoi
                        une erreur si ce n'est pas le cas.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/contact.png" ?> alt="">
            </div>
        </div>
    </div>

    <div class="blocRight">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Panier :</strong></p>
                    <p>Cette page présente les articles sélectionnés, il y a la possibilité de modifier la quantité de produit voulus, 
                        supprimer un produit du panier ainsi qu’un calcul automatique de l’intégralité des produits.
                        <span id="textStyle">Le client ne voulait pas que l'achat en ligne soit possible en premier lieu.</span>
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/panier.png" ?> alt="">
            </div>
        </div>
    </div>


    <div class="blocLeft">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Admin :</strong></p>
                    <p>D'ici on peut gérer les produits du site web. 
                        Nous pouvons accéder à la page <span id="textStyle">"Gérer les produits"</span> après avoir remplis le formulaire
                        de connexion de la page Admin.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/admin1.png" ?> alt="">
            </div>
        </div>
    </div>


    <div class="blocRight">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Ajouter produits :</strong></p>
                    <p>Cette page permet de remplir les champs à renseigner dans la base de données pour que le produit
                        s'affiche sur le site dans la bonne catégorie du site.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/admin2.png" ?> alt="">
            </div>
        </div>
    </div>

    <div class="blocLeft">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Modifier produits :</strong></p>
                    <p>Cette page permet de modifier les produits présents en base de données.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/admin3.png" ?> alt="">
            </div>
        </div>
    </div>

    <div class="blocRight botPage">
        <div class="Content">
            <div class="realisationsImg">
                <div class="desc">
                    <p><strong>Supprimer produits :</strong></p>
                    <p>Cette page permet de supprimer les produits, <span id="textStyle">une double vérification</span> est faites avant
                        de le supprimer.
                    </p>
                </div>
                <img src= <?= $var->switch() . "/img/imgMLS/admin4.png" ?> alt="">
            </div>
        </div>
    </div>



</div>