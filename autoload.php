<?php
const CLASES_FOLDER="clases";
const  PEOPLE_FOLDER="people";
const  ITEMS_FOLDER="items";

spl_autoload_register(function ($nombre_clase) {

    echo "## $nombre_clase<br/>";
    $dirs= [PEOPLE_FOLDER, ITEMS_FOLDER];
    foreach ($dirs as $dir) {
        $ruta = CLASES_FOLDER.DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR.$nombre_clase.'.php';
        echo "<p>Ruta: $ruta</p>";
        if (file_exists($ruta)){
            require_once $ruta;
            //parar de iterar para esa $nombre_clase que ya se ha encontrado
            return;
        }
    }
    
});