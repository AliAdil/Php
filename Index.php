
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
header {
    background-color: red;
    padding : 2em;
    text-align : center;
}
</style>
</head>

<body>
<header>
<h1>
<?php
    $name = $_GET['name'];
    echo 'Hello '.$name. 'Pash';
?>
</h1>
</header>
</body>
</html>