
<!DOCTYPE html>
<html>
    <head>
    <title>Page Title</title>
    <style>

    </style>
    </head>

    <body>
    <!--
        <h1>Task For The Day</h1>
        <h2><?= ucwords('this is subheading'); ?> </h2>
            <!-- Showing List Items With foreach loop--
        <ul>
            <?php foreach ($person as $key=> $feature) : ?>
                <li><strong><?= ucwords($key); ?> </strong><?=  $feature; ?></li>

            <?php endforeach;  ?>
            <h1> I AM DIFFERENT ARRAY </h1>
            <?php foreach ($task as $assign => $work) :?>
                <li><strong><em><?= ucwords($assign) ?></em></strong><?= $work ?></li>

            <?php endforeach;     ?>
        
        
        
        </ul>
            <!-- Showing list item With out Foreach loop --
            
        <ul>
            <h1> I AM SAME ARRAY BUT USED IN DIFFERNT WAY</h1>
            <li>
                <strong>Name: </strong> <?= $task['title'];?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due'];?>
            </li>
            <li>
                <strong>Person Responsible </strong> <?= $task['assigned_to'];?>
            </li>
                
               
            <li>
                <strong>Status </strong> <?= !$task['completed']?'&#9745' : '&#9744';?>
            </li>
            <!-- With  brackets --
            <h1>With if else brackets in code </h1>
            <li>
                <?php 
                     if (!$task['completed'])
                        {
                        echo '<strong>&#9745</strong>';
                        }
                    else{
                        echo '&#9744';
                        }       
                ?>
                <!-- Without if else brackets --
                <p>Without if else brackets in code<p>
                
                    <?php if ($task['completed']) : ?>
                        <strong>&#9745</strong>
                    <?php else : ?>
                        <strong>&#9744</strong>
                    <?php endif ?>

            </li>
        
        
        
        </ul>
    --> 
        <ul>
            <?php foreach($tasks as $task) : ?>
                 <li><?= $task ->description; ?></li>               
            <?php endforeach; ?>
        </ul>
    </body>
</html>