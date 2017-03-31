<!-- // --- TEMPLATE | LIGHTGALLERY-START -->

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

<!-- // --- TEMPLATE | LIGHTGALLERY-END -->