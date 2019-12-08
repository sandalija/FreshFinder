<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estils.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IPO - FreshFinder</title> 
    </head>
 
    <body>
        <input type="image" src="resources/FreshFinder_logo_white.png" />
        <div class="flex-help-buttons">
            <a class="HelpButton" href="https://www.freshlycosmetics.com/es/contacta">Ayuda</a>
            <a class="HelpButton" href="https://www.freshlycosmetics.com/es/productos/">Ver todo el catálogo</a>
        </div>    
        <div class ="hola">
                <h2>Bienvenidos</h2>
            </div>
            <div>
            <h3>DESTACADOS</h3>
            <div class="flex-container">
            <?php
                class Product {
                    public $name;
                    public $descr_sort;
                    public $description;
                    public $price;
                    public $guia_uso;
                    public $funcion;
                    public $stars;
                    public $imagen;
                    public $enlace_freshly;
                }
                    $agua_micelar_green = new Product();
                $agua_micelar_green->name = "Agua Micelar Fresh Green";
                $agua_micelar_green->descr_sort = "Agua micelar - 150ml";
                $agua_micelar_green->price = 28.0;
                $agua_micelar_green->guia_uso = "Pontelo en la cara";
                $agua_micelar_green->funcion = array (113,4);
                $agua_micelar_green->stars = 4;
                $agua_micelar_green->imagen = "resources/agua-micelar-natural-detox.jpg";
                $agua_micelar_green->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/agua-micelar-natural-detox";
            
                $blue_radiance_enzymatic_serum = new Product();
                $blue_radiance_enzymatic_serum->name = "Blue Radiance Enzymatic Serum";
                $blue_radiance_enzymatic_serum->descr_sort = "Sérum facial exfoliante - 30ml";
                $blue_radiance_enzymatic_serum->price = 35.0;
                $blue_radiance_enzymatic_serum->guia_uso = "nada";
                $blue_radiance_enzymatic_serum->funcion = array (111,1);
                $blue_radiance_enzymatic_serum->stars = 0;
                $blue_radiance_enzymatic_serum->imagen = "/resources/serum-exfoliante-enzimatico-natural.jpg";
                $blue_radiance_enzymatic_serum->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/serum-exfoliante-enzimatico-natural";
                
                $pro_repair_manos = new Product();
                $pro_repair_manos->name = "Tratamiento Pro-Repair de Manos y U�as";
                $pro_repair_manos->descr_sort = "Crema de manos y uñas - 50ml";
                $pro_repair_manos->price = 14.00;
                $pro_repair_manos->guia_uso = "Pontelo en las manos.";
                $pro_repair_manos->funcion = array (114,0);
                $pro_repair_manos->stars = 4;
                $pro_repair_manos->imagen = "resources/tratamiento-crema-manos-natural.jpg";
                $pro_repair_manos->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/tratamiento-crema-manos-natural";
                
                echo "<div>
                        <a href=\"$agua_micelar_green->enlace_freshly\">
                            <img src=\"{$agua_micelar_green->imagen}\"/>
                        </a>
                        <h3>{$agua_micelar_green->name}</h3>
                        <p>{$agua_micelar_green->descr_sort}</p>
                    </div>
                    <div>
                        <a href=\"$pro_repair_manos->enlace_freshly\">
                                <img src=\"{$pro_repair_manos->imagen}\"/>
                            </a>
                            <h3>{$pro_repair_manos->name}</h3>
                            <p>{$pro_repair_manos->descr_sort}</p>
                        </div>
                    <div>
                        <a href=\"$blue_radiance_enzymatic_serum->enlace_freshly\">
                            <img src=\"{$blue_radiance_enzymatic_serum->imagen}\"/>
                        </a>
                        <h3>{$blue_radiance_enzymatic_serum->name}</h3>
                        <p>{$blue_radiance_enzymatic_serum->descr_sort}</p>
                    </div>
                </div>
            </div>
        </div>";
        ?>

        <div class = "flex-main-buttons">
            <a class="QAbutton" href="QA.php?q=0">EMPEZAR<br>RECOMENDACIÓN</a>
            <a class="QAbutton" href="https://www.freshlycosmetics.com/es/packs/"><br>PARA REGALAR</a>
        </div>
        
        
    </body>
</html>