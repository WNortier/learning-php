<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative arrays</title>
</head>
<body>

<ul>
    <?php foreach ($person as $key => $feature) : ?>
        <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
    <?php endforeach; ?>
</ul>
    
</body>
</html>