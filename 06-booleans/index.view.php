<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booleans</title>
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

<!-- Ternary operator -->
<li>
    <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
</li>

</ul>
    
</body>
</html>