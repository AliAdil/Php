
<!DOCTYPE html>
<html>
    <head>
    <title>Page Title</title>
    <style>

    </style>
    </head>

    <body>
        
        <ul>
            <?php foreach ($person as $key=> $feature) : ?>
                <li><strong><?= $key; ?> </strong><?=  $feature; ?></li>

            <?php endforeach;  ?>

            <?php foreach ($task as $assign => $work) :?>
                <li><em><?= $assign ?></em><strong><?= $work ?></strong></li>

            <?php endforeach;     ?>
        
        
        
        </ul>
    
    
    </body>
</html>