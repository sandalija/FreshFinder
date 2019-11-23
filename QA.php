<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estils.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IPO - Recomanar</title> 
    </head>
 
    <body>
            <input type="image" src="resources/FreshFinder_logo.png" />
        <div class="box">
            <div class="question">
                <?php
                 include 'resources/scripts.php'; 

                $q = $_GET['q'];
 
         
                if($q == "1") {
                    echo "¿Sobre que quieres que te ayudemos?";
                    echo '<div class="flex-answer-buttons"> ';
                    echo '<input type="submit" class="answers-button" href="QA.php?q=2" onclick="button_press()">Tratamiento piel</button> ';
                    echo '<a class="answers-button" href="QA.php">Tratamiento facial</a> ';
                    echo '<a class="answers-button" href="QA.php">Tratamiento cabello</a> ';
                    echo '<a class="answers-button" href="QA.php">Para niños</a> ';
                    echo '</div> ';
                }
                elseif($q=="")
                    echo "This is Home Page";
                else
                    echo "what are you looking for! ?";

                function button_press(){
                    $file=fopen("C:\FreshFinder\responses.txt", "w");
                    fputs($file, "Hola\n");
                    fclose($file);
                    /*$file=fopen('C:\FreshFinder\responses.txt', 'w');
                    fwrite($file, 'Hola\n');
                    fclose($file);*/
                }

            ?>

            </div>
            
            
        </div>
        <div class="for-back-button">
            <input type="image" src="resources/back-icon.png" />
        </div>
    </body>
</html>