<?php
include 'database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es google</title>
</head>
<body>
    <header>

    </header>

    <main>
        <p>
            <?php
            foreach($googleFaq as $key => $value){
                echo "<h2>{$key}</h2>";
                foreach($value as $item){
                    echo "<ul>";
                    foreach($item as $k=>$val){
                        echo "<li>{$k}:{$val}</li>";
                        
                       
                    };
                    echo " </ul>";
                }

            }
            ?>
        </p>

    </main>
    
</body>
</html>