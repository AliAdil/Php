
<!DOCTYPE html>
<html>
    <head>
    <title>Page Title</title>
    <style>

    </style>
    </head>

    <body>
        <h1>Task For The Day</h1>
        <h2><?= ucwords('this is subheading'); ?> </h2>
            <!-- Showing List Items With foreach loop-->
        <ul>
            <?php foreach ($person as $key=> $feature) : ?>
                <li><strong><?= ucwords($key); ?> </strong><?=  $feature; ?></li>

            <?php endforeach;  ?>

            <?php foreach ($task as $assign => $work) :?>
                <li><strong><em><?= ucwords($assign) ?></em></strong><?= $work ?></li>

            <?php endforeach;     ?>
        
        
        
        </ul>
            <!-- Showing list item Without Foreach loop -->
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title'];?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due'];?>
            </li>
            <li>
                <strong>Person Responsible </strong> <?= $task['assigned_to'];?>
            </li>
                <!-- Ternary Operator -->
            <li>
                <strong>Status </strong> <?= $task['completed']?'&#9745' : '&#9744';?>
            </li>
            <li>
                <!-- With  brackets -->
                <?php 
                     if ($task['completed'])
                        {
                        echo '<strong>&#9745</strong>';
                        }
                    else{
                        echo '&#9744';
                        }       
                ?>
                <!-- With out brackets -->
                <br>
                    <?php if ($task['completed']) ?>
                        <strong>&#9745</strong>
                    <? endif; ?>

            </li>
        
        
        
        </ul>
    
    </body>
</html>