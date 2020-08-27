<?php 
class Cms5f46cdb237510715753762_92d3c7352666110d9168a9ec22472b64Class extends Cms\Classes\PageCode
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
