<?php include 'header.php'; ?>
    <section id="hero-section" class="section">
        <div id="hero">
            <div>
                <h1>Portfolio de Edouard Hillion</h1>
                <p>
                    Bonjour! Je suis 
                    <strong>Edouard Hillion</strong>, étudiant en  
                    <strong>BTS SIO</strong> 
                    option 
                    <strong>SLAM</strong>. 
                    J'ai commencé à coder sur mon temps libre avant de choisir 
                    de me réorienter dans cette voie. Sérieux et curieux, 
                    je suis toujours motivé à apprendre de nouvelles choses. 
                </p>
            
                <a href="/fichiers/tableau.pdf" target="_blank">
                    <div class="cv-button">
                        <p>Mes compétences</p>
                    </div>
                </a>
            </div>
            <div>
                <img id="pp" src="img/moi.jpg" alt="Photo de profil">
            </div>
        </div>
    </section>

    <section id="projets-section" class="section boxes-section">
        <h2 id="projets-title" class="title">Mes projets</h2>
        <div class="boxes">
            <div class="box">
                <a href="./myProject.php?id=gdpi">
                    <h3 class="nameTitle">Gestionnaire de Parc Informatique</h3>
                    <p>Logiciel de gestion de parc informatique pour avec installeur Windows et Linux. Communique avec une base de données SQL sur MariaDB.</p>
                </a>
            </div>
            <div class="box">
                <a href="./myProject.php?id=gestionnaireDeProjets">
                    <h3 class="nameTitle">Gestionnaire de projets</h3>
                    <p>Réalisation d'une application web en PHP, HTML, CSS, SQL pour la gestion de projets allant de la création de tâches à la gestion des utilisateurs</p>
                </a>
            </div>
            <div class="box">
                <a href="./myProject.php?id=portfolio">
                    <h3 class="nameTitle">Portfolio</h3>
                    <p>J'ai réalisé ce portfolio en PHP, HTML, CSS. Je gère une template pour afficher mes pages qui reprennent toute la même structures.</p>
                </a>
            </div>
            <div class="box">
                <a href="./myProject.php?id=glpi">
                    <h3 class="nameTitle">Glpi</h3>
                    <p>Réalisation de deux documentations pour GLPI. Technique pour l'installation et Utilisateur pour les personnes qui ne sont pas à l'aise avec l'informatique</p>
                </a>
            </div>
        </div>
    </section>
    
    <section class="hr-section">
        <hr />
    </section>
    
    <section id="outils-section" class="section boxes-section">
        <h2 id="outils-title"class="title">Mes outils</h2>
        <div class="boxes">
            <div class="box">
                <h3 class="nameTitle">Languages</h3>
                <p>PHP, HTML, CSS, Java, Python SQL</p>
            </div>

            <div class="box">
                <h3 class="nameTitle">Base de données</h3>
                <p>MySQL, MariaDB, PhpMyAdmin</p>
            </div>
            <div class="box">
                <h3 class="nameTitle">Logiciels</h3>
                <p>Github, VsCode, Docker</p>
            </div>
        </div>
    </section>


    <section id="xp-pro-section" class="section boxes-section">
        <div id="xp-pro-div">
            <h2>Mes expériences professionnelles</h2>
            <h3>Stage chez Passedevant</h3>
            <p class="fira-code">Sites internet sur Wordpress avec Oxygen Builder</p>
            <p>✅ Travailler en mode projet<br/>✅ Développer la présence en ligne de l'organisation</p>
            <div class="marquee">
                <div id="passedevant">
                    <div id="passedevant-marquee" class="xp-pro-box">
                        <a href="./myProject.php?id=stagePassedevant" class="passedevant-link">
                            <div id="webpaysagiste" class="passedevant-site">
                                <h4>Agence WebPaysagiste</h4>
                                <img src="img/webpaysagiste.jpg" alt="Capture d'écran https://agencewebpaysagiste.fr/" class="passedevant-img">
                            </div>
                        </a>
                        <a href="./myProject.php?id=stagePassedevant" class="passedevant-link">
                            <div id="paloma" class="passedevant-site">
                                <h4>Paloma</h4>
                                <img src="img/paloma.jpg" alt="Capture d'écran paloma" class="passedevant-img">
                            </div>
                        </a>
                        <a href="./myProject.php?id=stagePassedevant" class="passedevant-link">
                            <div id="successmarketing" class="passedevant-site">
                                <h4>Le Success Marketing</h4>
                                <img src="img/successmarketing.jpg" alt="Capture d'écran du successmarketing" class="passedevant-img">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <hr/>
            <h3>Stage chez Team Plastique</h3>
            <p class="fira-code">SQL & Excel</p>
            <div class="marquee">
                <div id="passedevant">
                    <div id="passedevant-marquee" class="xp-pro-box">
                        <a href="./myProject.php?id=stageTeamplastique" class="passedevant-link">
                            <div id="successmarketing" class="passedevant-site">
                                <h4>Voir mon stage</h4>
                                <img src="./img/teamPlastique.png" alt="Capture d'écran du successmarketing" class="passedevant-img">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>