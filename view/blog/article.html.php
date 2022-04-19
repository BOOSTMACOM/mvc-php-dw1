<?php include '../view/partials/_top.html.php' ?>
<h1 class="text-center"><?= $article['title'] ?></h1>
<p><?= $article['content'] ?></p>

<h2>Commentaires</h2>
<?php foreach($comment as $key) : ?>
<p><span class="author"><?= $key['author'] ?></span><br>
<?= $key['content'] ?> <span class="creation">(<?= $key['created_at'] ?>)</span></p> 
<?php endforeach; ?>

<p><a class="btn btn-primary" href="/?controller=blog&action=comment&id=<?= $article['id'] ?>">Ajouter un commentaire</a></p>


<?php include '../view/partials/_bottom.html.php' ?>
