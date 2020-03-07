<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionals</title>
</head>
<body>

<ul>
    <?php foreach ($task as $key => $todo) : ?>

        <li><strong><?= ucwords($key); ?></strong>: <?= $todo; ?></li>

    <?php endforeach; ?>

</ul>

<!-- Alternative syntax with more control over keys -->

<ul>

<li>
    <strong>Name: </strong> <?= $task['title']; ?>
</li>

<li>
    <strong>Due Date: </strong> <?= $task['due']; ?>
</li>

<li>
    <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
</li>

<!-- In situations where we might want to wrap items in html its better to use tradional if else rather than ternary operator-->
<li>
    <strong>Status: </strong> 
    
    <?php

    if ($task['completed']) {
        echo '<span class="icon">&#9989;</span>';
    } else {
        echo 'Incomplete';
    }

    ?>
</li>

<!-- Alternative syntax where html text is more controlled and neat -->

<li>
    <strong>Status: </strong> 
    
    <?php if ($task['completed']) : ?>

        <span class="icon">&#9989;</span>

    <?php else: ?>

        <span class="icon">Incomplete</span>

    <?php endif;?>
</li>


</ul>
    
</body>
</html>