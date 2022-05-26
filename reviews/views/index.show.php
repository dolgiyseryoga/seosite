<?php foreach ($posts as $post) : ?>
    <div class="container1">
        <p><span style="color:#84AE39"><?= $post['name']; ?></span><strong><?= $post['title']; ?></strong></p>
        <p style="color:black"><?= $post['content']; ?></p>
    </div>
<?php endforeach; ?>