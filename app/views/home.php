<h2>Home View</h2>

<h3>Users list(<?php echo count($users) ; ?>)</h3>

<ul>
    <?php foreach($users as $user) : ?>
        <li><?php echo $user->firstName?>
                <?php echo $user->lastName?> | <a href="/user/show/<?php echo $user->id ?>">Detalhes</a>
        </li>
    <?php endforeach ?>
</ul>
<hr>



