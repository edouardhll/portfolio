<?php
    $bdd['stagePassedevant'] = [
        'title' => 'Mon stage chez Passedevant',
        'description' => '<strong>Passedevant</strong>, est une <strong>agence web</strong> 
            experte en référencement naturel SEO. 
            Elle accompagne les professionnels dans la création de leur site web ainsi que dans son référencement SEO & SEA.',
        'img' => [
            'src' => './img/passedevant.png',
            'alt' => 'logo passedevant'
            ],
        'button' => [
            'label' => 'Visiter leur site',
            'url' => 'https://passedevant.net/'
            ],
        'section' => [
            [
                "hn" => "h2",
                'title' => 'Mes tâches',
                'description' => "Pendant mon stage chez Passedevant, j'ai eu l'occasion de travailler sur plusieurs sites internet pour leurs clients. Ces sites ont été réalisés à l'aide du CMS Wordpress ainsi que de l'extension Oxygen Builder.
                <br> J'ai ainsi pu découvrir :
                </p>
                <ul id='liste-pd'>
                <li>La gestion des <strong>breakpoints responsive</strong></li>
                <li>La gestion des champs <strong>ACF/SCF</strong></li>
                <li>La création de <strong>remontées dynamiques</strong></li>
                <li>Les bases de l'optimisation <strong>SEO</strong></li>
                </ul>
                <p>Cette expérience m'a appris à travailler en équipe à travers la planification de tâches, mais également en réalisant ces tâches par priorité.",
                "img" => [
                    "url" => "./img/todopriorite.png",
                    "alt" => "todo",
                    ],
                "button" => null
            ],
            [
                "hn" => "h2",
                "title" => "Les sites que j'ai réalisés",
                "description" => "Tous les sites ont été réalisés avec Wordpress à partir d'une maquette Figma ou Claude Design",
                "img" => null,
                'button' => null
            ],
            [
                "hn" => "h3",
                "title" => "Agence WebPaysagiste",
                "description" => "Réalisation d'un site pour attirer de nouveaux clients chez Passedevant. Création d'un marquee et d'un formulaire WPforms. Le formulaire est connecté via Zapier au Discord de l'entreprise sous forme de Webhook",
                "img" => [
                    "url" => "./img/webpaysagiste.jpg",
                    "alt" => "Capture d'écran du site",
                    ],
                'button' => [
                    'label' => 'Visiter le site',
                    'url' => 'https://agencewebpaysagiste.fr/'
                ]
            ],
            [
                "hn" => "h3",
                "title" => "Paloma",
                "description" => "Gestion des pages \"Savoir-faire\" avec des champs SCF.
                        Création d'un formulaire avec WPforms.",
                "img" => [
                    "url" => "./img/paloma.jpg",
                    "alt" => "Capture d'écran du site",
                    ],
                'button' => [
                    'label' => 'Visiter le site',
                    'url' => 'https://tailleur-pierre-nantes.fr/'
                ]
            ],
            [
                "hn" => "h3",
                "title" => "Le Success Marketing",
                "description" => "Début de création du site. Réalisation d'un effet \"glaçage\" pour le header ainsi que les différents éléments flottants.",
                "img" => [
                    "url" => "img/successmarketing.jpg",
                    "alt" => "Capture d'écran du successmarketing",
                    ],
                'button' => [
                    'label' => 'Visiter le site',
                    'url' => 'https://www.successmarketing.fr/'
                ]
            ]
        ],
        "end" => [
            "title" => "Les compétences que j'ai validé durant ce stage",
            "skills" => [
                [ 
                    "skill" => "✅ Travailler en mode projet"
                ],
                [
                    "skill" => "✅ Développer la présence en ligne de l’organisation"
                ]
                ]
        ]
    ];
    $bdd['stageTeamplastique'] = [
        'title' => 'Mon stage chez Team Plastique',
        'description' => '<strong>Team Plastique</strong>, est une entreprise qui transforme la matière plastique en <strong>pièces techniques et esthétiques.</strong>',
        'img' => [
            'src' => './img/teamplastique.png',
            'alt' => 'logo teamplastique'
            ],
        'button' => [
            'label' => 'Visiter leur site',
            'url' => 'https://www.teamplastique.com/'
            ],
        'section' => [
            [
                "hn" => "h2",
                'title' => 'Mes tâches',
                'description' => "Section à venir",
                "img" => [
                    "url" => "",
                    "alt" => "à venir",
                    ],
                "button" => null
            ]
        ],
        "end" => [
            "title" => "Les compétences que j'ai validé durant ce stage",
            "skills" => [
                [
                    "skill" => "À venir"
                ]
            ]
        ]
    ];
    $bdd['gdpi'] = [
        'title' => 'Gestionnaire de parc informatique',
        'description' => "Gestion de Parc Informatique (Python / Tkinter / MySQL) <br/> Application desktop permettant de centraliser, consulter et gérer l'inventaire matériel (ajout, modification, suppression, visualisation) avec persistance en base de données relationnelle MySQL/MariaDB. Conçue pour Windows avec une interface graphique Tkinter et une gestion sécurisée des erreurs de saisie et de base de données.",
        'img' => [
            'src' => './img/python.webp',
            'alt' => 'logo py'
            ],
        'button' => [
            'label' => 'Documentation',
            'url' => './fichiers/doc_gdpi.pdf'
            ],
        'section' => [
            [
                "hn" => "h2",
                'title' => 'Stack Technique',
                'description' => "
                <ul>
                <li>Langage : Python 3.10+</li>
                <li>Interface Graphique (GUI) : Tkinter</li>
                <li>Base de données : MySQL / MariaDB</li>
                <li>Gestion de versions : Git / GitHub</li>
                <li>Environnement cible : Windows</li>
                </ul>
                ",
                "img" => null,
                "button" => null
            ],
            [
                "hn" => "h2",
                'title' => 'Fonctionnalités clés',
                'description' => "Le CRUD et la la gestion des erreurs",
                'img' => null,
                'button' => null
            ],
            [
               "hn" => "h3",
                'title' => "Gestion complète de l'inventaire (CRUD) :",
                'description' => "</p><ul>
                <li>Visualisation : Affichage dynamique de l'ensemble des équipements enregistrés (ID, nom de machine, catégorie, adresse IP, date d'acquisition).</li>
                <li>Ajout & Modification : Formulaires dédiés pour référencer de nouveaux appareils ou mettre à jour les informations existantes.</li>
                <li>Suppression : Retrait sécurisé d'un équipement obsolète ou sorti du parc.</li>
                </ul><p>",
                'img' => null,
                'button' => null 
            ],
            [
               "hn" => "h3",
                'title' => "Robustesse & Gestion des erreurs :",
                'description' => "
                <ul>
                <li>Contrôle strict du format des données (validation du format de date AAAA-MM-JJ, gestion des contraintes SQL et champs obligatoires).</li>
                <li>Interception des exceptions (try-except) avec messages d'alerte explicites pour éviter tout arrêt brutal de l'application.</li>
                </ul>",
                'img' => null,
                'button' => null 
            ],
            [
               "hn" => "h3",
                'title' => "Gestion complète de l'inventaire (CRUD) :",
                'description' => "</p><ul>
                <li>Visualisation : Affichage dynamique de l'ensemble des équipements enregistrés (ID, nom de machine, catégorie, adresse IP, date d'acquisition).</li>
                <li>Ajout & Modification : Formulaires dédiés pour référencer de nouveaux appareils ou mettre à jour les informations existantes.</li>
                <li>Suppression : Retrait sécurisé d'un équipement obsolète ou sorti du parc.</li>
                </ul><p>",
                'img' => null,
                'button' => null 
            ],
            [
               "hn" => "h2",
                'title' => 'Livrable & Documentation',
                'description' => "<ul>
                <li>Code source Python structuré et commenté</li>
                <li>Schéma de base de données relationnelle SQL</li>
                <li>Documentation complète</li>
                </ul>",
                'img' => null,
                'button' => [
                    'label' => 'Github du projet',
                    'url' => 'https://github.com/edouardhll/GestionDeParcInformatique'
                ] 
            ]
            //modèle
            // [
            //    "hn" => "",
            //     'title' => '',
            //     'description' => "",
            //     'img' => [
            //         'src' => '',
            //         'alt' => ''
            //     ],
            //     'button' => [
            //         'label' => '',
            //         'url' => ''
            //     ] 
            // ]
        ],
        "end" => [
            "title" => "Les compétences que j'ai validé durant ce stage",
            "skills" => [
                [
                    "skill" => "✅ Gérer le patrimoine informatique"
                ],
                [
                    "skill" => "✅ Mettre à disposition des utilisateurs un service informatique"
                ]
            ]
        ]
    ];
    
?>