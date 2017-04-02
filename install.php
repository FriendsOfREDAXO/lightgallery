<?php

/** @var rex_addon $this */

// Diese Datei ist keine Pflichtdatei mehr.

// Abhängigkeiten (PHP-Version, PHP-Extensions, Redaxo-Version, andere Addons/Plugins) sollten in die package.yml eingetragen werden.
// Sie brauchen hier dann nicht mehr überprüft werden!

// Hier können zum Beispiel Konfigurationswerte in der rex_config initialisiert werden.
// Das if-Statement ist notwendig, um bei einem reinstall die Konfiguration nicht zu überschreiben.
/*
 * folgt später
if (!$this->hasConfig()) {
    $this->setConfig('url', 'http://www.example.com');
    $this->setConfig('ids', [1, 4, 5]);
}
*/

// Mit einer rex_functional_exception kann die Installation mit einer Fehlermeldung abgebrochen werden.
$somethingIsWrong = false;
if ($somethingIsWrong) {
    throw new rex_functional_exception('Something is wrong');
}


//
// SQL-Anweisungen können auch weiterhin über die install.sql ausgeführt werden.
//


// SQL :: rex_media_manager_type => lightgallery_0450
$mediamanager_typ = rex_sql::factory();
#$mediamanager_typ->setDebug();
$mediamanager_typ->setTable('rex_media_manager_type');
$mediamanager_typ->setValue('name','lightgallery_0450');
$mediamanager_typ->setValue('description','Zur Darstellung der Thumbs in der lightgallery. (resize_width: 450px)');

try {
    $mediamanager_typ->insert();
    echo rex_view::success('Der Media Manager "lightgallery_0450" Typ wurde angelegt. ');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager "lightgallery_0450" Typ wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}

$mediamanager_typ_id = (int) $mediamanager_typ->getLastId();

$mediamanager_typ_effekt = rex_sql::factory();
#$mediamanager_typ_effekt->setDebug();
$mediamanager_typ_effekt->setTable('rex_media_manager_type_effect');
$mediamanager_typ_effekt->setValue('type_id', $mediamanager_typ_id);
$mediamanager_typ_effekt->setValue('priority', 1);
$mediamanager_typ_effekt->setValue('effect', 'resize');
$mediamanager_typ_effekt->setValue('parameters', '{"rex_effect_crop":{"rex_effect_crop_width":"","rex_effect_crop_height":"","rex_effect_crop_offset_width":"","rex_effect_crop_offset_height":"","rex_effect_crop_hpos":"center","rex_effect_crop_vpos":"middle"},"rex_effect_filter_blur":{"rex_effect_filter_blur_repeats":"10","rex_effect_filter_blur_type":"gaussian","rex_effect_filter_blur_smoothit":""},"rex_effect_filter_sharpen":{"rex_effect_filter_sharpen_amount":"80","rex_effect_filter_sharpen_radius":"0.5","rex_effect_filter_sharpen_threshold":"3"},"rex_effect_flip":{"rex_effect_flip_flip":"X"},"rex_effect_header":{"rex_effect_header_download":"open_media","rex_effect_header_cache":"no_cache"},"rex_effect_insert_image":{"rex_effect_insert_image_brandimage":"","rex_effect_insert_image_hpos":"left","rex_effect_insert_image_vpos":"top","rex_effect_insert_image_padding_x":"-10","rex_effect_insert_image_padding_y":"-10"},"rex_effect_mediapath":{"rex_effect_mediapath_mediapath":""},"rex_effect_mirror":{"rex_effect_mirror_height":"","rex_effect_mirror_set_transparent":"colored","rex_effect_mirror_bg_r":"","rex_effect_mirror_bg_g":"","rex_effect_mirror_bg_b":""},"rex_effect_resize":{"rex_effect_resize_width":"450","rex_effect_resize_height":"","rex_effect_resize_style":"maximum","rex_effect_resize_allow_enlarge":"enlarge"},"rex_effect_rounded_corners":{"rex_effect_rounded_corners_topleft":"","rex_effect_rounded_corners_topright":"","rex_effect_rounded_corners_bottomleft":"","rex_effect_rounded_corners_bottomright":""},"rex_effect_workspace":{"rex_effect_workspace_width":"","rex_effect_workspace_height":"","rex_effect_workspace_hpos":"left","rex_effect_workspace_vpos":"top","rex_effect_workspace_set_transparent":"colored","rex_effect_workspace_bg_r":"","rex_effect_workspace_bg_g":"","rex_effect_workspace_bg_b":""}}');

try {
    $mediamanager_typ_effekt->insert();
    echo rex_view::success('Der Media Manager Effekt wurde angelegt und kann konfiguriert werden!');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager Effekt wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}


// SQL :: rex_media_manager_type => lightgallery_0650
$mediamanager_typ = rex_sql::factory();
#$mediamanager_typ->setDebug();
$mediamanager_typ->setTable('rex_media_manager_type');
$mediamanager_typ->setValue('name','lightgallery_0650');
$mediamanager_typ->setValue('description','Zur Darstellung der Thumbs in der lightgallery. (resize_width: 650px)');

try {
    $mediamanager_typ->insert();
    echo rex_view::success('Der Media Manager "lightgallery_0650" Typ wurde angelegt. ');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager "lightgallery_0650" Typ wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}

$mediamanager_typ_id = (int) $mediamanager_typ->getLastId();

$mediamanager_typ_effekt = rex_sql::factory();
#$mediamanager_typ_effekt->setDebug();
$mediamanager_typ_effekt->setTable('rex_media_manager_type_effect');
$mediamanager_typ_effekt->setValue('type_id', $mediamanager_typ_id);
$mediamanager_typ_effekt->setValue('priority', 1);
$mediamanager_typ_effekt->setValue('effect', 'resize');
$mediamanager_typ_effekt->setValue('parameters', '{"rex_effect_crop":{"rex_effect_crop_width":"","rex_effect_crop_height":"","rex_effect_crop_offset_width":"","rex_effect_crop_offset_height":"","rex_effect_crop_hpos":"center","rex_effect_crop_vpos":"middle"},"rex_effect_filter_blur":{"rex_effect_filter_blur_repeats":"10","rex_effect_filter_blur_type":"gaussian","rex_effect_filter_blur_smoothit":""},"rex_effect_filter_sharpen":{"rex_effect_filter_sharpen_amount":"80","rex_effect_filter_sharpen_radius":"0.5","rex_effect_filter_sharpen_threshold":"3"},"rex_effect_flip":{"rex_effect_flip_flip":"X"},"rex_effect_header":{"rex_effect_header_download":"open_media","rex_effect_header_cache":"no_cache"},"rex_effect_insert_image":{"rex_effect_insert_image_brandimage":"","rex_effect_insert_image_hpos":"left","rex_effect_insert_image_vpos":"top","rex_effect_insert_image_padding_x":"-10","rex_effect_insert_image_padding_y":"-10"},"rex_effect_mediapath":{"rex_effect_mediapath_mediapath":""},"rex_effect_mirror":{"rex_effect_mirror_height":"","rex_effect_mirror_set_transparent":"colored","rex_effect_mirror_bg_r":"","rex_effect_mirror_bg_g":"","rex_effect_mirror_bg_b":""},"rex_effect_resize":{"rex_effect_resize_width":"650","rex_effect_resize_height":"","rex_effect_resize_style":"maximum","rex_effect_resize_allow_enlarge":"enlarge"},"rex_effect_rounded_corners":{"rex_effect_rounded_corners_topleft":"","rex_effect_rounded_corners_topright":"","rex_effect_rounded_corners_bottomleft":"","rex_effect_rounded_corners_bottomright":""},"rex_effect_workspace":{"rex_effect_workspace_width":"","rex_effect_workspace_height":"","rex_effect_workspace_hpos":"left","rex_effect_workspace_vpos":"top","rex_effect_workspace_set_transparent":"colored","rex_effect_workspace_bg_r":"","rex_effect_workspace_bg_g":"","rex_effect_workspace_bg_b":""}}');

try {
    $mediamanager_typ_effekt->insert();
    echo rex_view::success('Der Media Manager Effekt wurde angelegt und kann konfiguriert werden!');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager Effekt wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}


// SQL :: rex_media_manager_type => lightgallery_0900
$mediamanager_typ = rex_sql::factory();
#$mediamanager_typ->setDebug();
$mediamanager_typ->setTable('rex_media_manager_type');
$mediamanager_typ->setValue('name','lightgallery_0900');
$mediamanager_typ->setValue('description','Zur Darstellung der Thumbs in der lightgallery. (resize_width: 900px)');

try {
    $mediamanager_typ->insert();
    echo rex_view::success('Der Media Manager "lightgallery_0900" Typ wurde angelegt. ');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager "lightgallery_0900" Typ wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}

$mediamanager_typ_id = (int) $mediamanager_typ->getLastId();

$mediamanager_typ_effekt = rex_sql::factory();
#$mediamanager_typ_effekt->setDebug();
$mediamanager_typ_effekt->setTable('rex_media_manager_type_effect');
$mediamanager_typ_effekt->setValue('type_id', $mediamanager_typ_id);
$mediamanager_typ_effekt->setValue('priority', 1);
$mediamanager_typ_effekt->setValue('effect', 'resize');
$mediamanager_typ_effekt->setValue('parameters', '{"rex_effect_crop":{"rex_effect_crop_width":"","rex_effect_crop_height":"","rex_effect_crop_offset_width":"","rex_effect_crop_offset_height":"","rex_effect_crop_hpos":"center","rex_effect_crop_vpos":"middle"},"rex_effect_filter_blur":{"rex_effect_filter_blur_repeats":"10","rex_effect_filter_blur_type":"gaussian","rex_effect_filter_blur_smoothit":""},"rex_effect_filter_sharpen":{"rex_effect_filter_sharpen_amount":"80","rex_effect_filter_sharpen_radius":"0.5","rex_effect_filter_sharpen_threshold":"3"},"rex_effect_flip":{"rex_effect_flip_flip":"X"},"rex_effect_header":{"rex_effect_header_download":"open_media","rex_effect_header_cache":"no_cache"},"rex_effect_insert_image":{"rex_effect_insert_image_brandimage":"","rex_effect_insert_image_hpos":"left","rex_effect_insert_image_vpos":"top","rex_effect_insert_image_padding_x":"-10","rex_effect_insert_image_padding_y":"-10"},"rex_effect_mediapath":{"rex_effect_mediapath_mediapath":""},"rex_effect_mirror":{"rex_effect_mirror_height":"","rex_effect_mirror_set_transparent":"colored","rex_effect_mirror_bg_r":"","rex_effect_mirror_bg_g":"","rex_effect_mirror_bg_b":""},"rex_effect_resize":{"rex_effect_resize_width":"900","rex_effect_resize_height":"","rex_effect_resize_style":"maximum","rex_effect_resize_allow_enlarge":"enlarge"},"rex_effect_rounded_corners":{"rex_effect_rounded_corners_topleft":"","rex_effect_rounded_corners_topright":"","rex_effect_rounded_corners_bottomleft":"","rex_effect_rounded_corners_bottomright":""},"rex_effect_workspace":{"rex_effect_workspace_width":"","rex_effect_workspace_height":"","rex_effect_workspace_hpos":"left","rex_effect_workspace_vpos":"top","rex_effect_workspace_set_transparent":"colored","rex_effect_workspace_bg_r":"","rex_effect_workspace_bg_g":"","rex_effect_workspace_bg_b":""}}');

try {
    $mediamanager_typ_effekt->insert();
    echo rex_view::success('Der Media Manager Effekt wurde angelegt und kann konfiguriert werden!');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager Effekt wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}


// SQL :: rex_media_manager_type => lightgallery_1100
$mediamanager_typ = rex_sql::factory();
#$mediamanager_typ->setDebug();
$mediamanager_typ->setTable('rex_media_manager_type');
$mediamanager_typ->setValue('name','lightgallery_1100');
$mediamanager_typ->setValue('description','Zur Darstellung der großen Bilder in der lightgallery. (resize_width: 1100px)');

try {
    $mediamanager_typ->insert();
    echo rex_view::success('Der Media Manager "lightgallery_1100" Typ wurde angelegt. ');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager "lightgallery_1100" Typ wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}

$mediamanager_typ_id = (int) $mediamanager_typ->getLastId();

$mediamanager_typ_effekt = rex_sql::factory();
#$mediamanager_typ_effekt->setDebug();
$mediamanager_typ_effekt->setTable('rex_media_manager_type_effect');
$mediamanager_typ_effekt->setValue('type_id', $mediamanager_typ_id);
$mediamanager_typ_effekt->setValue('priority', 1);
$mediamanager_typ_effekt->setValue('effect', 'resize');
$mediamanager_typ_effekt->setValue('parameters', '{"rex_effect_crop":{"rex_effect_crop_width":"","rex_effect_crop_height":"","rex_effect_crop_offset_width":"","rex_effect_crop_offset_height":"","rex_effect_crop_hpos":"center","rex_effect_crop_vpos":"middle"},"rex_effect_filter_blur":{"rex_effect_filter_blur_repeats":"10","rex_effect_filter_blur_type":"gaussian","rex_effect_filter_blur_smoothit":""},"rex_effect_filter_sharpen":{"rex_effect_filter_sharpen_amount":"80","rex_effect_filter_sharpen_radius":"0.5","rex_effect_filter_sharpen_threshold":"3"},"rex_effect_flip":{"rex_effect_flip_flip":"X"},"rex_effect_header":{"rex_effect_header_download":"open_media","rex_effect_header_cache":"no_cache"},"rex_effect_insert_image":{"rex_effect_insert_image_brandimage":"","rex_effect_insert_image_hpos":"left","rex_effect_insert_image_vpos":"top","rex_effect_insert_image_padding_x":"-10","rex_effect_insert_image_padding_y":"-10"},"rex_effect_mediapath":{"rex_effect_mediapath_mediapath":""},"rex_effect_mirror":{"rex_effect_mirror_height":"","rex_effect_mirror_set_transparent":"colored","rex_effect_mirror_bg_r":"","rex_effect_mirror_bg_g":"","rex_effect_mirror_bg_b":""},"rex_effect_resize":{"rex_effect_resize_width":"1100","rex_effect_resize_height":"","rex_effect_resize_style":"maximum","rex_effect_resize_allow_enlarge":"enlarge"},"rex_effect_rounded_corners":{"rex_effect_rounded_corners_topleft":"","rex_effect_rounded_corners_topright":"","rex_effect_rounded_corners_bottomleft":"","rex_effect_rounded_corners_bottomright":""},"rex_effect_workspace":{"rex_effect_workspace_width":"","rex_effect_workspace_height":"","rex_effect_workspace_hpos":"left","rex_effect_workspace_vpos":"top","rex_effect_workspace_set_transparent":"colored","rex_effect_workspace_bg_r":"","rex_effect_workspace_bg_g":"","rex_effect_workspace_bg_b":""}}');

try {
    $mediamanager_typ_effekt->insert();
    echo rex_view::success('Der Media Manager Effekt wurde angelegt und kann konfiguriert werden!');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager Effekt wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}


// SQL :: rex_media_manager_type => parallax
$mediamanager_typ = rex_sql::factory();
#$mediamanager_typ->setDebug();
$mediamanager_typ->setTable('rex_media_manager_type');
$mediamanager_typ->setValue('name','parallax');
$mediamanager_typ->setValue('description','Zur Darstellung der Parallax Bilder. (resize_width: 2560px) ');

try {
    $mediamanager_typ->insert();
    echo rex_view::success('Der Media Manager "parallax" Typ wurde angelegt. ');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager "parallax" Typ wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}

$mediamanager_typ_id = (int) $mediamanager_typ->getLastId();

$mediamanager_typ_effekt = rex_sql::factory();
#$mediamanager_typ_effekt->setDebug();
$mediamanager_typ_effekt->setTable('rex_media_manager_type_effect');
$mediamanager_typ_effekt->setValue('type_id', $mediamanager_typ_id);
$mediamanager_typ_effekt->setValue('priority', 1);
$mediamanager_typ_effekt->setValue('effect', 'resize');
$mediamanager_typ_effekt->setValue('parameters', '{"rex_effect_crop":{"rex_effect_crop_width":"","rex_effect_crop_height":"","rex_effect_crop_offset_width":"","rex_effect_crop_offset_height":"","rex_effect_crop_hpos":"center","rex_effect_crop_vpos":"middle"},"rex_effect_filter_blur":{"rex_effect_filter_blur_repeats":"10","rex_effect_filter_blur_type":"gaussian","rex_effect_filter_blur_smoothit":""},"rex_effect_filter_sharpen":{"rex_effect_filter_sharpen_amount":"80","rex_effect_filter_sharpen_radius":"0.5","rex_effect_filter_sharpen_threshold":"3"},"rex_effect_flip":{"rex_effect_flip_flip":"X"},"rex_effect_header":{"rex_effect_header_download":"open_media","rex_effect_header_cache":"no_cache"},"rex_effect_insert_image":{"rex_effect_insert_image_brandimage":"","rex_effect_insert_image_hpos":"left","rex_effect_insert_image_vpos":"top","rex_effect_insert_image_padding_x":"-10","rex_effect_insert_image_padding_y":"-10"},"rex_effect_mediapath":{"rex_effect_mediapath_mediapath":""},"rex_effect_mirror":{"rex_effect_mirror_height":"","rex_effect_mirror_set_transparent":"colored","rex_effect_mirror_bg_r":"","rex_effect_mirror_bg_g":"","rex_effect_mirror_bg_b":""},"rex_effect_resize":{"rex_effect_resize_width":"2560","rex_effect_resize_height":"","rex_effect_resize_style":"maximum","rex_effect_resize_allow_enlarge":"enlarge"},"rex_effect_rounded_corners":{"rex_effect_rounded_corners_topleft":"","rex_effect_rounded_corners_topright":"","rex_effect_rounded_corners_bottomleft":"","rex_effect_rounded_corners_bottomright":""},"rex_effect_workspace":{"rex_effect_workspace_width":"","rex_effect_workspace_height":"","rex_effect_workspace_hpos":"left","rex_effect_workspace_vpos":"top","rex_effect_workspace_set_transparent":"colored","rex_effect_workspace_bg_r":"","rex_effect_workspace_bg_g":"","rex_effect_workspace_bg_b":""}}');

try {
    $mediamanager_typ_effekt->insert();
    echo rex_view::success('Der Media Manager Effekt wurde angelegt und kann konfiguriert werden!');
} catch (rex_sql_exception $e) {
    echo rex_view::warning('Der Media Manager Effekt wurde nicht angelegt.<br/>Wahrscheinlich existiert er schon.');
}