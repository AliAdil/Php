
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
<?php $Name = $_GET['name'];
echo 'My Name is '.$Name.' PAsh'?>
</h1>

<h1><?php echo "My Name is ".$_GET['car'];?></h1>
</header>
</body>
</html>