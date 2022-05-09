<?php foreach($data as $key) : ?>
<h1><?= $key->getTitle(); ?></h1>

<div>
    <p><?= $key->getContent(); ?></p>
    <span>Créé le <?= $key->getCreatedAt(); ?></span>
</div>


    <?php endforeach; ?>