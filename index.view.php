
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
        <ul>
            <?php foreach ($person as $key=> $feature) : ?>
                <li><strong><?= ucwords($key); ?> </strong><?=  $feature; ?></li>

            <?php endforeach;  ?>

            <?php foreach ($task as $assign => $work) :?>
                <li><strong><em><?= ucwords($assign) ?></em></strong><?= $work ?></li>

            <?php endforeach;     ?>
        
        
        
        </ul>
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
            <li>
                <strong>Status </strong> <?= $task['completed']?'Complete' : 'Incomplete';?>
            </li>
        
        
        
        </ul>
    
    </body>
</html>