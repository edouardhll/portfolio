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
                <h2>Mon parcours</h2>
                <ul>
                    <li>2020 - BAC sti2d spécialité itec au lycée Livet à Nantes</li>
                    <li>2021 - Apprenti cuisinier au restaurant "la rivière" à Basse-Goulaine</li>
                    <li>2022-2024 - Hôte de caisse au leclerc de Basse-Goulaine</li>
                    <li>2023 - élève en école de japonais à Tokyo</li>
                    <li>2025-2027 - élève en informatique à Ensitech à St Herblain</li>
                </ul>
                <a href="/fichiers/cv_edouard_hillion.pdf" target="_blank">
                    <div class="cv-button">
                        <p>Mon CV</p>
                    </div>
                </a>
                <a href="/fichiers/tableau.pdf" target="_blank">
                    <div class="cv-button">
                        <p>Visualiser mes compétences</p>
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
                <h3 class="nameTitle">GDPI</h3>
                <p>Logiciel de gestion de parc informatique pour avec installeur Windows et Linux. Communique avec une base de données SQL sur MariaDB.</p>
            </div>
            <div class="box">
                <h3 class="nameTitle">Le projet de GH</h3>
                <p>Logiciel de Guillaume Henry à venir.</p>
            </div>
            <div class="box">
                <h3 class="nameTitle">Portfolio</h3>
                <p>Mon portfolio a été réalisé en PHP, HTML et CSS à la main.</p>
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
            <div class="marquee">
                <div id="passedevant">
                    <div id="passedevant-marquee" class="xp-pro-box">
                        <a href="/passedevant.php#webpaysagiste" class="passedevant-link">
                            <div id="webpaysagiste" class="passedevant-site">
                                <h4>Agence WebPaysagiste</h4>
                                <img src="img/webpaysagiste.jpg" alt="Capture d'écran https://agencewebpaysagiste.fr/" class="passedevant-img">
                            </div>
                        </a>
                        <a href="/passedevant.php#paloma" class="passedevant-link">
                            <div id="paloma" class="passedevant-site">
                                <h4>Paloma</h4>
                                <img src="img/paloma.jpg" alt="Capture d'écran paloma" class="passedevant-img">
                            </div>
                        </a>
                        <a href="/passedevant.php#successmarketing" class="passedevant-link">
                            <div id="successmarketing" class="passedevant-site">
                                <h4>Le Success Marketing</h4>
                                <img src="img/successmarketing.jpg" alt="Capture d'écran du successmarketing" class="passedevant-img">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id=section-veille>
        <h2>Ma veille</h2>
        <h3>L’intégration de l’IA dans les bases de données relationnelles : PostgreSQL et pgvector</h3>
        <h3>La modernisation de PHP : Nouveautés de PHP 8.4 / 8.5 et performances</h3>
        <h3></h3>
    </section>
<?php include 'footer.php'; ?>