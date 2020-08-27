<?php 
class Cms5f47053775df6573173423_9431e584b3ec7d3e66d33ec6141dbff4Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $sub_dir = "home_page/";
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
