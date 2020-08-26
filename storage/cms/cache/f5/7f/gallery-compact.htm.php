<?php 
class Cms5efa66f33f6f5056490219_b8daf9794052d847e5cc8af9e6530427Class extends Cms\Classes\PageCode
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
