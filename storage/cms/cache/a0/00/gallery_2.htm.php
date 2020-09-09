<?php 
class Cms5f57dc8f76f63281382730_46288bfb825ceb6a8eecd438160ca81bClass extends Cms\Classes\PageCode
{
public function onStart()
{
    $sub_dir = "";
    $files = array();
    $path = './storage/app/media/' . $sub_dir;
    $dir = opendir($path);

    while(false != ($file = readdir($dir))) {
        if(($file != ".") and ($file != "..") and ($file != "index.php") and ($file != "undefined")) {
            $files[] = $path . $file; // put in array.
        }
    }
    closedir($dir);
    $this->page["photoFiles"] = $files;
}
}
