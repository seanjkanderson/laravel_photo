<?php 
class Cms5f59043bb2d7c455902406_c0414b9024574bdb0f65875bb85001e1Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $files = array();
    $folder = $query['collection'];
    $path = './storage/app/media/' . $folder . '/';
    $dir = opendir($path);

    while(false != ($file = readdir($dir))) {
        if( str_contains(strtolower($file), '.jpg') or str_contains(strtolower($file), '.jpeg')) {
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
