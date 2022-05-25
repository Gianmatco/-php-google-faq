<?php
include 'database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>es google</title>
</head>
<body>
    <header>
        <navbar class="container-navbar">
            <div class="pt-4 ps-4" >
                <p class="d-inline-block"><i class="fa-brands fa-google "></i>oogle</p>
                <p class="d-inline-block">PRIVACY E TERMINY</p>
                <div class="d-inline-block pe-1">
                    <i class="fa-solid fa-ellipsis-vertical"></i> <i class="fa-solid fa-ellipsis-vertical"></i> <i class="fa-solid fa-ellipsis-vertical"></i>  <i class="fa-solid fa-user"></i>
                </div>
               
            
            </div>

            <div class="container-ul">
                <ul>
                    <li>
                        introduzione
                    </li>
                    <li>
                        Norme sulla privacy
                    </li>
                    <li>
                        Termine di servizio
                    </li>
                    <li>
                        tecnologie
                    </li>
                    <li>
                        domande frequenti 
                    </li>
                </ul>

            </div>
            
        </navbar>

    </header>

    <main>
        <div class="container-70">
                <?php
                foreach($googleFaq as $key){
                    //echo "<h2>{$key}</h2>";
                    //foreach($value as $item){
                        //echo "<ul>";
                        //foreach($item as $k=>$val){
                            echo "<h2>{$key['domanda']}</h2>";
                            echo "<p>{$key['risposta']}</p>";
                            
                            
                        
                        //};
                        //echo " </ul>";
                    //};

                };
                ?>

        </div>
            
        

    </main>
    
</body>
</html>