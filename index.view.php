
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
<?=  'hello'.Htmlspecialchars($_GET['name']); ?>
</h1>
</header>
</body>
</html>