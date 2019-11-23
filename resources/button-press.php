<?php 
    $file=fopen("responses.txt", "w");
    fwrite($file, "Hola");
    fclose($file);
?>
