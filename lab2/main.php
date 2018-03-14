<?php
$dir = opendir("./" );
$input_file = './data/test.txt';
$text = file_get_contents($input_file);
$plugins = array();

while($any_file = readdir($dir)){
    if (is_file($any_file)){
        if(strpos($any_file, '.plugin.php')!==FALSE){
            include("./".$any_file);
            $plugins[]=substr($any_file,0,strpos($any_file, '.plugin.php'));
        }
    }
}

closedir($dir);

echo "Original: $text\n";

foreach ($plugins as $plugin){
    $call_func = $plugin.'_autochange';
    if (!function_exists($call_func)){
        print "Plugin $plugin contains error!\n";
    } else {
        print "$plugin: ".call_user_func($call_func, $text)."\n";
    }
}
?>