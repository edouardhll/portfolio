<?php
    function printProject($bdd, $id) {
        if($bdd[$id]['title'] != ""){
            echo '
                <section class="projectHeroSection">
                    <div class="projectHeroDiv">
                        <div class="projectHeroLeft">
                            <h1>'.$bdd[$id]['title'].'</h1>
                            <p>'.$bdd[$id]['description'].'</p>
                            <a href="'.$bdd[$id]['button']['url'].'" target="_blank">
                                <div class="cv-button">
                                    <p>'.$bdd[$id]['button']['label'].'</p>
                                </div>
                            </a>
                        </div>
                        <div class="projectHeroRight">
                            <img class ="projectHeroLogo" src="'.$bdd[$id]['img']['src'].'" alt="'.$bdd[$id]['img']['alt'].' ">
                        </div>
                    </div>
                </section>
                <section class="projectMiddleSection">
                    <div class="projectMiddleDiv1">
            ';

            foreach ($bdd[$id]['section'] as $section){
                echo '
                            <div class="projectMiddleDiv2">
                                <'.$section['hn'].'>'.$section['title'].'</'.$section['hn'].'>
                                <p>
                                    '.$section['description'].'
                                </p>
                    ';
                if (isset($section['img'])) {
                    echo '
                                <img class="projectImg" src="'.$section['img']['src'].'" alt="'.$section['img']['alt'].'">
                    ';
                }
                if (isset($section['button'])) {
                    echo '
                                <a href="'.$section['button']['url'].'" target="_blank">
                                    <div class="cv-button">
                                        <p>'.$section['button']['label'].'</p>
                                    </div>
                                </a>
                            
                    ';
                }
                echo'
                            </div>
                            <div class="hr-section projectHr">
                            <hr />
                            </div>
                        ';
            }
            echo '  
                    </div>
                </section>';
                    
            if (isset($bdd[$id]['end'])){
                    echo '
                <section class="projectEndSection">
                    <div class="projectEndDiv1">
                    <div class="projectEndDiv2">
                        <h2>'.$bdd[$id]["end"]["title"].'</h2>
                    ';
                    
                    foreach ($bdd[$id]["end"]["skills"] as $skills) {
                        echo '
                        <p>'.$skills['skill'].'</p>
                        ';
                        }
                        
                    echo'
                        <a href="./fichiers/tableau.pdf" target="_blank">
                            <div class="orange-button">
                                <p>Voir le tableau</p>
                            </div>
                        </a>
                    </div>
                    </div>
                </section>
                    ';
                }
        } else {
            header("Location: ./index.php");
            exit();
        }
    }
?>