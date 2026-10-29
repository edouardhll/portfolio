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
                <a href="/fichiers/cv_edouard_hillion.pdf" target="_blank">
                    <div class="cv-button">
                        <p>Mon CV</p>
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
                        <a href="https://agencewebpaysagiste.fr/" class="passedevant-link" target="_blank">
                            <div id="webpaysagiste" class="passedevant-site">
                                <h4>Agence WebPaysagiste</h4>
                                <img src="img/webpaysagiste.jpg" alt="Capture d'écran https://agencewebpaysagiste.fr/" class="passedevant-img">
                            </div>
                        </a>
                        <a href="https://tailleur-pierre-nantes.fr/" class="passedevant-link" target="_blank">
                            <div id="paloma" class="passedevant-site">
                                <h4>Paloma</h4>
                                <img src="img/paloma.jpg" alt="Capture d'écran paloma" class="passedevant-img">
                            </div>
                        </a>
                        <a href="https://www.successmarketing.fr/" class="passedevant-link" target="_blank">
                            <div id="successmarketing" class="passedevant-site">
                                <h4>Le Success Marketing</h4>
                                <img src="img/successmarketing.jpg" alt="Capture d'écran du successmarketing" class="passedevant-img">
                            </div>
                        </a>
                    </div>


            </div>
        </div>
    </section>
    <!-- ptimisation SEO.
    • Création de remontée dynamique.
    • Gestion de champs ACF/SCF.
    • Gestion des breakpoints responsive.
    • Migration d'un site OVH vers o2switch -->
<?php include 'footer.php'; ?>