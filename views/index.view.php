    <nav>
        <ul>
            <li><a href="about">About us</a></li>
            <li><a href="about/culture">About culture</a></li>
            <li><a href="contacts">Contacts</a></li>
        </ul>
    </nav>
    <h1>My tasks</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>

                <?php if ($task->is_completed ): ?>
                    <strike>
                <?php endif; ?>
                
                <?=$task->description;?>
                
                <?php if ($task->is_completed ): ?>
                    </strike>
                <?php endif; ?>

            </li>    
        <?php endforeach; ?>
    </ul>

    <h2>Sisesta task</h2>
    <form method="POST" action="/task">
        <input type="text" name="task">
        <input type="submit" value="Salvesta">
    </form>

    <?php require_once('partials/footer.php'); ?>
