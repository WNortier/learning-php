# 2 PHP and html
You can include php within html because it was built for the web
You can GET values from the URL using ?key=value
You can use functions
If you have a file that only includes php logic you can omit the closing tag and only have <?php
Security is important... users can inject html into the url 

Shorthand for <?=php echo       ?>
is 
<?=     ?>

localhost:8888/?name=warwick

<html>

<h1>
<?php echo "Hello, " . $_GET['name']; ?>

OR 

<?= echo "Hello, " . $_GET['name']; ?>

OR with a function

<?= "Hello, " . htmlspecialchars($_GET['name'])>
</h1>

</html>