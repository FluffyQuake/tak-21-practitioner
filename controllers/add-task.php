<?php

$app['database']->insert('tasks',[
    'desctription' => $_POST['description'],
    // 'name' => $_POST['task']
]);

header('Location: /');