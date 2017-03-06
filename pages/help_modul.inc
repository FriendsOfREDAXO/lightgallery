<!-- // --- MODUL | 03 . Galerie (INPUT) -->

<!-- ...ein Auszug... -->

<div class="form-group">
  <i>Bilder</i>
  <div class="col-sm-12">
    REX_MEDIALIST[id="1" widget="1"]
    <i>Bilder in der Medienkategorie "Fotos" (ID 1) haben ein zusätzliches Linkfeld.</i>
  </div>
</div>

<!-- ...ein Auszug... -->


<!-- // --- MODUL | 03 . Galerie (OUTPUT) -->

<?php

// frontend / backend
$frontend = '';
$backend = '';

if ("REX_MEDIALIST[1]" != '') {
    $media_list = explode(',', "REX_MEDIALIST[1]");

    $frontend .= '
	<section class="gallery__wrapper clearfix">';

    $frontend .= '
        <div class="gallery">';

    $frontend .= '
		    <div class="row">';

    //Zaehler fuer DIVs
    $i = 1;

    foreach ($media_list as $media_file) {
        $media = rex_media::get($media_file);
        if ($media) {

            $media_title = $media->getTitle('title' );
            $media_title_blanc = ( $media_title != '') ? $media_title : '';
            $media_title = ( $media_title != '') ? 'TITLE: ' .$media_title : 'TITLE: -';
            $media_description = str_replace(array("\r\n", "\n", "\r"), ' ', $media->getValue('med_description'.$languageSuffix));
            $media_description_blanc = ( $media_description != '' ) ? ' '.$media_description : '';
            $media_description = ( $media_description != '' ) ? 'DESCRIPTION: '.$media_description : 'DESCRIPTION: -';
            $media_copyright = $media->getValue('med_copyright');
            $media_copyright = ( $media_copyright != '' ) ? 'AUTOR: '.$media_copyright : 'AUTOR: -';
            $media_link = $media->getValue('med_gallery_link');
            $media_link = ( $media_link != '' ) ? $media_link : '';

            $frontend .= '
            <div class="gallery__item col-md-3 col-sm-4 col-xs-6">
            
                <figure class="effect">
                    <img src="index.php?rex_media_type=MEDIENTYP_SETEN&rex_media_file='.$media_file.'" 
                        srcset="" 
                        title="'.$media_copyright.' | '.$media_title.' | '.$media_description.'" 
                        alt="'.$media_copyright.' | '.$media_title.' | '.$media_description.'
                        ">
                    <figcaption>';

            if ( $media_description != '' ) {
                // Nur im Einspalter "02 . Article (1-col)" Bildtexte anzeigen, da Bilder ansonsten zu klein
                $frontend .= '
                        <h2><span>'.$media_title_blanc.'</span></h2>
                        <p>'.$media_description_blanc.'</p>';
            }

            $frontend .= '
                        <a class="lightgallery__button" rel="lg__REX_SLICE_ID" data-src="index.php?rex_media_type=full&rex_media_file='.$media_file.'">
                            <img src="index.php?rex_media_type=MEDIENTYP_SETEN&rex_media_file='.$media_file.'" title="'.$media_copyright.' | '.$media_title.' | '.$media_description.'" alt="'.$media_copyright.' | '.$media_title.' | '.$media_description.'">
                        </a>';

            if ($media_link != '') {
                $frontend .= '
                        <a href="'.$media_link.'"></a>';
            }

            $frontend .= '
                    </figcaption>			
                </figure>
                
            </div><!-- /.gallery__item  -->';

            $backend .= '
            <img src="index.php?rex_media_type=rex_mediapool_detail&rex_media_file='.$media_file.'" title="'.$media_copyright.' | '.$media_title.' | '.$media_description.'" alt="'.$media_copyright.' | '.$media_title.' | '.$media_description.'">';

        }
    }

    $frontend .= '
            </div><!-- /.row -->
            
		</div><!-- /.gallery -->
		
	</section><!-- /.gallery__wrapper clearfix -->';

}

// Different output for frontend and backend
if (rex::isBackend()) {
    echo $backend;
} else {
    echo $frontend;
}

?>
