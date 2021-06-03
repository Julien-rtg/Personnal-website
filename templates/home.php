<div class="topContainer">
    <div class="img">
        <img src="img/Profil.png" alt="">
    </div>
    <div class="titre">
        <h1>Julien Rittling</h1>
        <h2 id="h2">Développeur Web</h2>
    </div>
</div>

<hr id="hrNav">

<div class="nav">
    <a href="<?= $router->generate('home'); ?>">Accueil</a> <!-- $router->generate(''); calling route from index.php -->
    <a href="<?= $router->generate('presentation'); ?>">Présentation</a>
    <a href="<?= $router->generate('realisations'); ?>">Réalisations</a>
    <a href= <?= $var->switch() . "/img/CV_Julien_Rittling.pdf" ?> download="CV_Julien_Rittling">CV :
    <img src= <?= $var->switch() . "/img\downloadupdates_theapplication_thearrow_descarg_2915.png" ?> alt=""></a>
    <!-- <button onclick="darkMode()" id="btnColor">
        Yeux sensibles 
        <img id="selectorOpenEye" src=  $var->switch() . "/img/eye_visible_hide_hidden_show_icon_145988.png"  alt="">
        <img class="closeEye" id="selectorCloseEye" src=  $var->switch() . "/img/eye_slash_visible_hide_hidden_show_icon_145987.png"  alt="">
    </button> -->
</div>

<div class="botContainer">

    <div class="blocComp" data-aos="flip-left" data-aos-duration="1000">
        <div class="competences">
            <div class="competencesFront">
                <div class="competencesImgFront">
                    <img src="img/file_type_html_icon_130541.png" alt="HTML" title="HTML">
                    <img src="img/file_type_css_icon_130661.png" alt="CSS" title="CSS">
                    <img src="img/javascript_icon_130900.png" alt="Javascript" title="Javascript">
                    <img src="img/jquery_plain_wordmark_logo_icon_146445.png" alt="Jquery" title="Jquery">
                </div>
            </div>
            <hr id="hrComp">
            <div class="competencesBack">
                <div class="competencesImgBack">
                    <img src="img/file_type_php_icon_130266.png" alt="PHP" title="PHP">
                    <img src="img/sql-document-outlined-interface-symbol_icon-icons.com_57504.png" alt="SQL" title="SQL">
                    <img src="img/prog-symfony_icon-icons.com_50769.png" alt="Symfony" title="Symfony">
                </div>
            </div>
        </div>
    </div>


    <div class="blocLeft" data-aos="flip-left" data-aos-duration="1000">
        <div class="Content">
            <h3>Mes formations :</h3>
            <div class="formations">
                <p><strong>2021 : OpenClassrooms - Développeur d'application PHP / Symfony (Bac+3/4)</strong></p>
                <p class="formationsP">Grâce à cette formation j'aurai abordé tous les sujets centraux me 
                    permettant de développer une application avec Symfony de manière professionnelle et robuste.
                    Depuis l'affichage de données provenant de la base de données, la traduction de contenu,
                    construire une API REST.</p>
            </div>
            <div class="formations">
                <p><strong>2019 / 2020 : Développeur Web PHP (Bac+2) au centre de formation de l'Adrar</strong></p>
                <p class="formationsP">Cette formation m'a appris à connaitre les bases du développement, les langages
                    tels que HTML/CSS/JS/PHP. Sur les outils comme Wamp, MySQL Workbench, phpMyAdmin, Github.
                    Je l'ai réalisé à distance sur une durée de 8 mois.</p>
            </div>
        </div>
    </div>

    <div class="blocRight" data-aos="flip-right" data-aos-duration="1000">
        <div class="Content">
            <h3>Mes expériences:</h3>
            <div class="experiences">
                <p>My lovely Sushi à Mazamet</p>
                <p>Dans le cadre de ma formation et pour la valider, je devais réaliser un stage de fin
                    de formation d'une durée de 8 semaines, j'ai du développer leur site en autonomie car il n'avait
                    pas de développeur dans leur entreprise. La réalisation du site c'est déroulé en plusieurs étapes :
                </p>
                <ul>
                    <li>La réalisation du cahier des charges et leur expression du besoin</li>
                    <li>L'analyse fonctionnelle</li>
                    <li>La conception du système d'information</li>
                    <li>Les choix techniques</li>
                    <li>Le développement</li>
                    <li>Déploiement</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blocLeft botPage contact" data-aos="flip-right" data-aos-duration="1000">
        <div class="Content">
            <h3>Contact :</h3>
            <div class="socials">
                <a href="mailto:julien.rittl@gmail.com"><img src="img\mail-black-envelope-symbol_icon-icons.com_56519.png" alt=""></a>
                <a href="https://www.linkedin.com/in/julien-rittling/"><img src="img/linkedin_icon-icons.com_65929 (1).png" alt=""></a>
                <a href="https://github.com/Julien-rtg"><img src="img/github-logo_icon-icons.com_73546 (1).png" alt=""></a>
            </div>
        </div>
    </div>

</div>

    