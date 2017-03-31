<!-- // --- TEMPLATE | Header (HTML) -->
<head>

    <!-- Variante 1: Einbindung per MINIFY-Addon -->
    REX_MINIFY[type=css set=resources_CSS]

    <!-- Variante 2: Einbindung per CSS -->
    <link rel="stylesheet" href="<?php echo rex_url::base('assets/lightgallery/css/lightgallery.min.css') ?>">

</head>

<!-- // --- TEMPLATE | BODY -->
<body>

    <!-- // --- TEMPLATE | JS -->

    <!-- Variante 1 bzw. 2 gilt auch für die JS-Dateien -->

    <!-- jQuery // Nur notwendig wenn jQuery nicht anders eingebunden wird // -->
    <script src="<?php echo rex_url::base('assets/lightgallery/plugins/jquery/jquery-3.1.1.min.js') ?>"></script>

    ...

    <!-- lightgallery/js-file -->
    <script src="<?php echo rex_url::base('assets/lightgallery/js/lightgallery.min.js') ?>"></script>

    <!-- lightgallery/script -->
    // GALERIE - lightGallery
    function bs_lightgallery(obj) {

        if(!obj.length) return;

        obj.lightGallery({
        thumbnail: true,
        selector: ".lightgallery__button"
        });

    }//end function


    // READY - START
    jQuery(document).ready(function(){

        "use strict";

        // Call BS_LIGHTGALLERY
        bs_lightgallery($(".gallery"));

    });
    // Ende ready function()

</body>
