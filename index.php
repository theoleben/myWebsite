<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="description" content="cours html css"/>
        <meta charset="UTF-8"/>
        <meta name="author" content="Théo LEBEN"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Théo LEBEN - Développeur web</title>
        <!-- lien vers le fichier css -->
        <link rel="stylesheet" href="css/style.css"/>
        <!-- favicon -->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" sizes="16x16"/>
        <!-- Police -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet"> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet"> -->
        <!-- Font Awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <header>
            <nav>
                <figure class="logo">
                    <img src="images/logo.png" alt="Logo" title="Logo">
                </figure>
                <ul class="menu_nav">
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#parcours">Mon parcours</a></li>
                    <li><a href="#portfolio">Mon portfolio</a></li>
                    <li><a href="#contacter">Me contacter</a></li>
                </ul>
            </nav>
        </header>
        <!-- Menu -->
        <!-- <i id="menu-bars" class="fas fa-bars"></i>
        <div id="menu"  style="height: 150px">
            <a href="#accueil">Accueil</a>
            <a href="#parcours">Mon parcours</a>
            <a href="#portfolio">Mon portfolio</a>
            <a href="#contacter">Me contacter</a>
        </div> -->
        <i id="menu-bars" class="fas fa-bars"></i>
        <div id="menu"  style="height: 0">
            <div class="container_menu">
                <a href="#accueil">Accueil</a>
                <a href="#parcours">Mon parcours</a>
                <a href="#portfolio">Mon portfolio</a>
                <a href="#contacter">Me contacter</a>
            </div>
            <div class="container_empty"></div>
        </div>
        <main>
            <h1>Accueil</h1>
            <section id="accueil_s1">
                <div class="intitule">
                    <!-- <p> -->
                        <span>Théo LEBEN</span><br>
                        <span>Développeur web</span>
                    <!-- </p> -->
                </div>
                <div class="description">
                    <p>
                        <span>Bonjour,</span><br><br>
                        <span>Je m'appelle Théo LEBEN et je suis ravi de vous accueillir sur mon site internet.</span><br><br>
                        <span>Formé en qualité de "Développeur web et web mobile" au sein de l'école WebForce3, je suis à la recherche d'un stage de 6 mois en entreprise pour développer une application web en PHP orienté objet avec une approche Modèle/Vue/Contrôleur.</span><br><br>
                        <span>Je vous invite à découvrir mon parcours, mon portfolio et je reste à votre disposition pour toute demande ou remarque.</span>
                    </p>
                </div>
            </section>
            <section id="parcours">
                <h2>Parcours</h2>
                <div class="container_1">
                    <div class="EP">
                        <span>Expériences professionnelles</span>
                        <div class="container_new">
                            <div class="container_EP">
                                <a href="https://www.lgm-ing.fr/" target="_blank">
                                    <figure class="logo_EP">
                                    <img src="images/logo_LGMIngenierie.png" alt="Logo LGM Ingénierie" title="Logo LGM Ingénierie">
                                        <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/LGM-group-rouge.png" alt="Logo LGM Group" title="Logo LGM Group"> -->
                                    </figure>
                                </a>
                                <p>Février 2018 - Novembre 2021 : <br> Ingénieur développement logiciel au sein <br> de LGM Ingénierie</p>
                                <!-- <p>Février 2018 - Novembre 2021 :</p><br>
                                <p> Ingénieur développement logiciel</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="FA">
                        <span>Formation académique</span>
                        <div class="container_FA1">
                            <a href="https://www.wf3.fr/" target="_blank">
                                <figure class="logo_EP">
                                    <img src="images/logo_WF3.png" alt="Logo WF3" title="Logo">
                                </figure>
                            </a>
                            <p>Janvier - Avril 2022 : <br> Formation développeur web et web mobile au sein de WebForce3 (490 heures)</p>
                        </div>
                        <div class="container_FA2">
                            <a href="https://www.ipsa.fr/" target="_blank">
                                <figure class="logo_EP">
                                    <img src="https://upload.wikimedia.org/wikipedia/fr/3/39/Logo_IPSA.svg" alt="Logo IPSA" title="Logo">
                                </figure>
                            </a>
                            <p>Septembre 2015 - Février 2018 : <br> Diplômé de l'Institut Polytechnique des Sciences Avancées (IPSA)</p>
                        </div>
                    </div>
                </div>
                <div class="container_2">
                    <div class="Langages">
                        <span>Langages</span>
                        <div class="container_L">
                            <div class="sub_container">
                                <figure class="logo_EPL">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="Logo HTML5" title="Logo HTML5">
                                </figure>
                                <figure class="logo_EPL">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="Logo CSS3" title="Logo CSS3">
                                </figure>
                                <figure class="logo_EPL">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" alt="Logo JavaScript" title="Logo JavaScript">
                                </figure>
                            </div>
                            <div class="sub_container2">
                                <figure class="logo_EPL">
                                    <img src="https://upload.wikimedia.org/wikipedia/fr/6/62/MySQL.svg" alt="Logo MySQL" title="Logo MySQL">
                                </figure>
                                <figure class="logo_EPL">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="Logo PHP" title="Logo PHP">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_3">
                    <div class="Versions">
                        <span>Gestionnaires de version</span>
                        <div class="container_V">
                            <figure class="logo_EP">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/GitLab_logo.svg" alt="Logo GitLab" title="Logo GitLab">
                            </figure>
                            <figure class="logo_EP">
                                <img src="https://git-fork.com/images/logo.png" alt="Logo Fork" title="Logo Fork">
                            </figure>
                        </div>
                    </div>
                    <div class="IDE">
                        <span>Environnement de développement</span>
                        <div class="container_I">
                            <figure class="logo_EP">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg" alt="Logo Visual Studio Code" title="Logo Visual Studio Code">
                            </figure>
                        </div>
                    </div>
                </div>
                <p>Voici mon CV au format pdf : <a href="doc/CV_TheoLEBEN.pdf" target="_blank"><i id="logo" class="fa-solid fa-newspaper fa-xl color_icon"></i></a></p>

            </section>
            <section id="portfolio">
                <h2>Portfolio</h2>
                <!-- <p>
                        Cette section est destinée à lister mes projets liés à mon activité de développeur web.
                    </p> -->
                <div class="container_P">
                    <div class="P1">
                        <span>Annonces immobilières</span>
                        <p>Développement de la partie back-end d'un site d'annonces immobilières en PHP procédural (MySQL)</p>
                        <div class="logooo">
                            <a href="projets/realEstateAdsWebsite/accueil.php" target="_blank"><i class="fa-solid fa-building fa-xl color_icon"></i></a>
                        </div>
                    </div>
                    <div class="P2">
                        <span>Gestion de tournois</span>
                        <p>Développement de la partie back-end d'un site de gestion de jeux, de joueurs et de matchs en PHP orienté objet avec une approche Modèle/Vue/Contrôleur (MySQL)</p>
                        <div class="logooo">
                            <a href="projets/gameTournamentManagement/" target="_blank"><i class="fa-solid fa-dice fa-xl color_icon"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contacter">
                <h2>Me contacter</h2>
                <div class="container_4">
                    <div class="container_info">
                        <div class="sub_container_info">
                            <span>Email : <a href="mailto:t%68&#101;&#111;%2e%6c&#101;%62e&#110;&#64;%67m%61&#105;&#108;%2e&#99;%6fm">theo.leben&#64;gmail.com</a></span>
                            <span>LinkedIn : <a href="https://www.linkedin.com/in/th%C3%A9o-leben-76916a139/" target="_blank"><i class="fa-brands fa-linkedin fa-xl color_icon2"></i></a></span>
                            <span>Téléphone : <a href="tel:+33667949471">+&#051;&#051;&#032;(&#048;)&#054;&#032;&#054;&#055;&#032;&#057;&#052;&#032;&#057;&#052;&#032;&#055;&#049;</a></span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <ul>
                <!-- <li><a href="#">POLITIQUE DE CONFIDENTIALITE</a></li> -->
                <li><a href="mentions_legales.php" target="_blank">MENTIONS LEGALES</a></li>
                <li><a href="#contacter">CONTACT</a></li>
            </ul>
        </footer>

        <script src="js/animation.js"> </script>
    </body>
</html>