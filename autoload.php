<?php
function my_autoload($class){
    $path=__DIR__.
        "/classes/".
        str_replace('\\','/',$class).
        ".php";
    require $path;
}
spl_autoload_register('my_autoload');
?>