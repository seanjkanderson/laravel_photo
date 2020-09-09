function findFiles(sub_dir) {
    $files = array();
    $path = './storage/app/media/' . $sub_dir;
    $dir = opendir($path);

    while(false != ($file = readdir($dir))) {
        if(($file != ".") and ($file != "..") and ($file != "index.php") and ($file != "undefined")) {
            $files[] = $path . $file; // put in array.
        }
    }
    closedir($dir);
    return $files;
}