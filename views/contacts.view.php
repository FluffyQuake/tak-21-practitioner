<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contacts</h1>
    <ul>
        <li>
                <?php if ($task->is_completed ): ?>
                <?php endif; ?>
                
                <?=$task->description;?>
                
                <?php if ($task->is_completed ): ?>
                <?php endif; ?>
        </li>
    </ul>
</body>
</html>