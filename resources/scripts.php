<?php

function button_respones() {
    $file=fopen("responses.txt", "w");
    fputs($file, "Hola\n");
    fclose($file);
    //echo "HW";

}


?>
   

