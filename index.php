<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="source/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="/img/logo.png" alt="" width="300px">
    </header>
    <hr>
    
<h1>Активные заявки</h1>
<?
require_once './Controller/RequestController.php';
$request = new RequestController();
$request->getRequest();
?>
</body>
</html>