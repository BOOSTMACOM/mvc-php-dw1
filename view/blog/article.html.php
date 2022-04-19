<?php include '../view/partials/_top.html.php' ?>
<h1><?= $article['title'] ?></h1>
<p><?= $article['content'] ?></p>

<h2>Commentaires</h2>
<?php foreach($comment as $key) : ?>
<p><?= $key['author'] ?></p>
<p><?= $key['content'] ?></p>
<p>créé le <?= $key['created_at'] ?></p>
<?php endforeach; ?>

<p><a href="/?controller=blog&action=comment&id=<?= $article['id'] ?>">Ajouter un commentaire</a></p>


<?php include '../view/partials/_bottom.html.php' ?>
