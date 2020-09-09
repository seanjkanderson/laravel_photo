<?php 
class Cms5f59072480a42269175376_0b0e4528668992a59bcb0270b01dc7b5Class extends Cms\Classes\PageCode
{
public function onStart()
{
    session_start();
    $sub_dir = "";
    $files = array();
    $path = './storage/app/media/' . $sub_dir;
    $dir = opendir($path);

    while(false != ($file = readdir($dir))) {
        if(!str_contains(strtolower($file), '.jpg') and !str_contains(strtolower($file), '.jpeg') and !str_contains(strtolower($file), 'home') and strlen($file) > 3) {
            $temp_path = $path . $file; // put in array.
            $temp_dir = opendir($temp_path);
            
            $flag = true;
            // Look through subdirectory to get either cover.jpg or the first image from the directory
            while(false != ($sub_file = readdir($temp_dir))) {
                if((str_contains(strtolower($sub_file), '.jpg') or str_contains(strtolower($sub_file), '.jpeg')) and str_contains(strtolower($sub_file), 'cover')) {
                    $files[] = $temp_path . '/' . $sub_file; // put in array.
                    $names[] = $file;
                    $flag = false;
                }
            }
            
            if($flag) {
                $sub_files = scandir ($temp_path);
                $files[] = $temp_path . '/' . $sub_files[2];
                $names[] = $file;
            }
            
            
        }
    }
    closedir($dir);
    $this->page["photoFiles"] = [$files, $names];
}
}
