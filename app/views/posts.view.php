<html>
    <body style="position: absolute; left:50%; transform:translate(-50%);">
        <div>
            <h1>Posts</h1>
        </div>    
    </body>
</html>

<?php require_once('partials/head.php'); ?>

<h2>Sisesta ülesanne</h2>
<form method="POST" action="/post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    <input type="text" name="time" placeholder="Time">
    <input type="submit" value="Salvesta">
</form>

<ul>
<?php foreach ($posts as $post): ?>
        <li>
            <?php if ( $post->title ): ?>
                <h1 class=""><?= $task->title; ?></h1>
                <?php endif; ?>
                <p>Description:</p>
            <?php if ( $post->content ): ?>
                <p class=""><?= $task->description; ?></p>
                <?php endif; ?>
                <p>Time:</p>
            <?php if  ($post->time ): ?>
                <p class=""><?= $task->time; ?></p>
                <?php endif; ?>
                <p>Name:</p>
        </li>    
    <?php endforeach; ?>
</ul>

<?php require_once('partials/footer.php'); ?>
