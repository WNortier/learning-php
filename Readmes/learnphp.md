*1 Variables*
*2 PHP and html*
*3 Separate PHP Logic from*
*4 Understanding Arrays*

# 1 Variables
Initialise a .php file
Dollar sign before variables
With double quotes you can interpret variables 


<script>
<?php 

$name = "Warwick"

echo "Hello, $name"
OR
echo "Hello, [$name]"
OR 
echo "Hello, " . $name 
</script>

# 2 PHP and html
You can include php within html
You can GET values from the URL using ?key=value
You can use functions

Shorthand for <php? is <?= 

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