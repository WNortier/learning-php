<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning php</title>
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
<h1><?php echo 'Hello World'?></h1>
</header>

<!-- You can GET values from the URL using ?key=value by using a super global-->

<h1>
<?php
$name = $_GET['name'];
echo "Hello, $name";
?>
</h1>

<!-- htmlspecialchars() is a function you can use to sanitize any html coming from the user -->

<h1>
<?php echo "Hello, " . htmlspecialchars($_GET['name']);?>
</h1>

<!-- shorthand for echoing out text -->

<h1><?= "Hello, " . $_GET['name']; ?></h1>

</body>
</html>