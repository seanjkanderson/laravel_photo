<?php 
class Cms5f5953cc5d4c0817325121_251419e86e356940242edfcf4a261456Class extends Cms\Classes\PageCode
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

            if(strpos($file, 'cover') !== false){
                $ext = strpos($file, '.');
                $underscore = strpos($file, '_');
                $image_name = substr($file, $underscore+1, $ext - $underscore - 1);
            } else{
                $ext = strpos($file, '.');
                $image_name = substr($file, 0, $ext);
                $image_name = str_replace("_", " ", $image_name);

                

            }

            echo '<li data-thumb="'.$fp.'">
                <button class="gallery_toggle empty_btn">
                    <div class="middlepane" >
                        <img src="'.$fp.'" class="active image_2"/>
                    </div>
                    <div class="gallery-caption">
                        <p style="opacity: 0%;">'. strtoupper($image_name).'</p>
                    </div>
                    
                </button>
            </li>';
        }
    echo '</ul>';

}
}
