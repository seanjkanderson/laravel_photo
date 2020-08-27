<?php 
class Cms5f46a401213b2469120125_071ee35b7a49ae368fb0ff01bb08d119Class extends Cms\Classes\PageCode
{
public function onStart()
{

$files = array();
$path = './storage/app/media/';
$dir = opendir($path);

while(false != ($file = readdir($dir))) {
    if(($file != ".") and ($file != "..") and ($file != "index.php") and ($file != "undefined")) {
        $files[] = $file; // put in array.
    }
}
closedir($dir);

echo '<div class="container">';
    echo '<div id="cycler">';
    foreach($files as $file) {

        $fp = $path . $file;
        if (str_contains($fp, '.jpg')) {
            echo "'.$fp.'";
            echo '<img class="image" src="'.$fp.'" >';
        }
        
    }
    echo '</div>';
echo '</div>';
}
}
