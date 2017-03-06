

<?php

// Fragment - START
$fragment = new rex_fragment();

$content .= '
<p>
    Bei der Installation wurden mehrere Effekte beim Media Manager AddOn hinzugefügt:
<ul>
    <li>lightgallery_0450</li>
    <li>lightgallery_0650</li>  
    <li>lightgallery_0900</li>  
    <li>lightgallery_1100</li>  
    <li>parallax</li>  
</ul>
    Sollten diese fehlen, bitte ein reinstall durchführen!
</p>

<p>
    Bei der Installation wurden mehrere PlugIns im Asset-Ordner des Addons unter "./plugins/" hinzugefügt:
<ul>
    <li>animate</li>
    <li>aniview</li>  
    <li>awesome</li>  
    <li>bootstrap3</li>  
    <li>ismobile</li>
    <li>jquery</li>
    <li>lazyload</li>
    <li>modal</li>
    <li>owl</li>
    <li>retina</li>
    <li>vegas</li>
</ul>
    <i>Werden aktuell teilweise für Projekte genutzt! (Könnten zukünfig entfallen.)</i>
</p>
';

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $this->i18n('help'), false);
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');
// Fragment - ENDE


// Fragment - START
$fragment = new rex_fragment();

$content_collapse1 = '
<p>Folgendes im Template einfügen:</p>
';

$content_collapse1 .= rex_string::highlight(rex_file::get(rex_path::addon('lightgallery','pages/help_template.inc')));

$content_collapse1 .= '
<p>Bei der Installation wurde ein Effekt beim Media Manager AddOn hinzugefügt. Sollte dieser fehlen, bitte ein reinstall durchführen</p>
<p>Diese Ausgabe dient als Beispiel für ein Modul:</p>

';
#$content_collapse1 .= rex_string::highlight(rex_file::get(rex_path::addon('lightgallery','pages/help_modul.inc')));

$fragment = new rex_fragment();
$fragment->setVar('title', $this->i18n('help_template'), false);
$fragment->setVar('collapse', $content_collapse1, false);
$fragment->setVar('class', 'default collapsed', false);
$fragment->setVar('body', $content_collapse1, false);
echo $fragment->parse('core/page/section.php');
// Fragment - ENDE


// Fragment - START
$fragment = new rex_fragment();

$content_collapse2 .= '
<p>Diese Ausgabe dient als Beispiel für ein Modul:</p>

';
$content_collapse2 .= rex_string::highlight(rex_file::get(rex_path::addon('lightgallery','pages/help_modul.inc')));

$fragment = new rex_fragment();
$fragment->setVar('title', $this->i18n('help_modul'), false);
$fragment->setVar('collapse', $content_collapse2, false);
$fragment->setVar('class', 'default collapsed', false);
$fragment->setVar('body', $content_collapse2, false);
echo $fragment->parse('core/page/section.php');
// Fragment - ENDE