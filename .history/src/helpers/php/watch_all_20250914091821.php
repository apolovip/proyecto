<?php
$directorio = __DIR__; // raíz del proyecto
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directorio));
$modificaciones = [];

foreach ($iterator as $archivo) {
    if ($archivo->isFile()) {
        $modificaciones[] = filemtime($archivo->getPathname());
    }
}

echo max($modificaciones); // timestamp más reciente