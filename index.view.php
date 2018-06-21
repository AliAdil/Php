
<!DOCTYPE html>
<html>
    <head>
    <title>Page Title</title>
    <style>

    </style>
    </head>

    <body>
        <header>
            <ul>

                    <?php foreach ($names as $name) : ?>
                        
                        <li><?= $name; ?></li>

                    <?php endforeach; ?>
            </ul>
            <ol>
                    <?php 
                
                    foreach ($animals as $arrayValues)
                        {
                        echo "<li>$arrayValues</li>";
                        }  
                    
                    ?>
            </ol>
           
        </header>
        <h1>        <?= 'Hello '.htmlspecialchars($_GET['test']);?> </h1>
    </body>
</html>