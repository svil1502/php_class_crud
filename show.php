<?php

require 'database/QueryBuilder.php';
$db=New QueryBuilder();
$id=$_GET['id'];
$task=$db->getOne($id, "tasks");


?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1><?= $task['title'];?> - <?= $task['id'];?></h1>
            <p>
                <?= $task['content'];?>
            </p>
            <a href="/">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>