<?php
require_once '../vendor/autoload.php';
function showFiles(string $dirName, array &$allFiles = [])
{
    $files = scandir($dirName);

    foreach ($files as $key => $value) {
        $path = realpath($dirName . DIRECTORY_SEPARATOR . $value);

        if (!is_dir($path)) {
            $allFiles[] = $path;
        } else if ($value != "." && $value != "..") {
            showFiles($path, $allFiles);
            $allFiles[] = $path;
        }
    }
    return;


}
$files  = [];
showFiles('.',$files);

dump($files);


$tab = [3, 2, 5, 6, 1];

usort($tab,function($a,$b) {
    return $a <=> $b;
});

dump($tab);

