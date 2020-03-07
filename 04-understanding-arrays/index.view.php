<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>

<style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
</style>

<body>

    <header>
        <h1></h1>
    </header>

    <p>Best practise</p>
    <ul>
        <?php
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
        ?>
    </ul>

    <p>Alternative syntax</p>
    <!-- An alternative syntax that is rarely used -->
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>