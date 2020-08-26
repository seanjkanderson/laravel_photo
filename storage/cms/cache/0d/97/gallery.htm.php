<?php 
class Cms5efa6833b79d4802186433_01872787228a388a04159198b05ea10fClass extends Cms\Classes\PageCode
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

    echo '<ul id="lightSlider">';
        foreach($files as $file) {

            $fp = $path . $file;
            echo '<li data-thumb="'.$fp.'">
                <button id="gallery_toggle">
                    <div class="middlepane" >
                        <img src="'.$fp.'" class="active image_2"/>
                    </div>
                </button>
            </li>';
        }
    echo '</ul>';

}
}
