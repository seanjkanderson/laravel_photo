<?php 
class Cms5f57c9a4aa576623109323_641a4509b9c116726ae567d9094f5499Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $sub_dir = "home_page/";
    $files = array();
    $path = './storage/app/media/' . $sub_dir;
    $dir = opendir($path);

    while(false != ($file = readdir($dir))) {
        if(str_contains(strtolower($file), '.jpg') or str_contains(strtolower($file), '.jpeg')) {
            $files[] = $path . $file; // put in array.
        }
    }
    closedir($dir);
    $this->page["photoFiles"] = $files;
}
}
