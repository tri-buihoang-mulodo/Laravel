<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Hello: <?= $name; ?></h1>
    <h1>Age: <?= $age; ?></h1>

    <ul>
        <?php foreach ($tasks as $task) :?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>