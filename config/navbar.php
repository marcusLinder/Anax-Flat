<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Rapporter för kursmomenten"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser som görs i kursmomenten"),
                "mark-if-parent" => true,
            ],

            "theme-selector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Ändra tema på sidan"),
                "mark-if-parent" => true,
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Bildblogg"),
                "mark-if-parent" => true,
            ],

            "assignments" => [
                "text"  => t("Uppgifter"),
                "url"   => $this->di->get("url")->create("#"),
                "title" => t("Uppgifter från kursmomenten"),
                "mark-if-parent" => true,

            "submenu" => [
                "items" => [
                    "grid" => [
                        "text"  => t("Grid"),
                        "url"   => $this->di->get("url")->create("grid"),
                        "title" => t("Vertikalt grid"),
                    ],

                    "typography" => [
                        "text"  => t("Typografi"),
                        "url"   => $this->di->get("url")->create("typography"),
                        "title" => t("Horisontellt grid/typografi"),
                    ],

                    "theme" => [
                        "text"  => t("Tema"),
                        "url"   => $this->di->get("url")->create("theme"),
                        "title" => t("Webbplatsens teman"),
                    ],

                    "images" => [
                        "text"  => t("Bilder"),
                        "url"   => $this->di->get("url")->create("images"),
                        "title" => t("Exempelsida för bilder"),
                    ],
                ],
            ],
        ],
            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om webbplatsen"),
                "mark-if-parent" => true,
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "Start" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Startsidan"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Rapporter för kursmomenten"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser som görs i kursmomenten"),
                "mark-if-parent" => true,
            ],

            "theme-selector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Ändra tema på sidan"),
                "mark-if-parent" => true,
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Bildblogg"),
                "mark-if-parent" => true,
            ],

            "assignments" => [
                "text"  => t("Uppgifter"),
                "url"   => $this->di->get("url")->create("#"),
                "title" => t("Uppgifter från kursmomenten"),
                "mark-if-parent" => true,

                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text"  => t("Grid"),
                            "url"   => $this->di->get("url")->create("grid"),
                            "title" => t("Vertikalt grid"),
                        ],

                        "typography" => [
                            "text"  => t("Typografi"),
                            "url"   => $this->di->get("url")->create("typography"),
                            "title" => t("Horisontellt grid/typografi"),
                        ],

                        "theme" => [
                            "text"  => t("Tema"),
                            "url"   => $this->di->get("url")->create("theme"),
                            "title" => t("Webbplatsens teman"),
                        ],

                        "images" => [
                            "text"  => t("Bilder"),
                            "url"   => $this->di->get("url")->create("images"),
                            "title" => t("Exempelsida för bilder"),
                        ],
                    ],
                ],
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om webbplatsen")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
