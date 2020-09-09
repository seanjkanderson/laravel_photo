<?php 
class Cms5f5936caec686630722111_b75da8bdf29a54acc7c216f17cded1bcClass extends Cms\Classes\PageCode
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
