<?php include '../view/partials/_top.html.php' ?>
<h1 class="text-center text-primary"><?= $article['title'] ?></h1>
<a class="text-info" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<p><?= $article['content'] ?></p>

<h2 class="comments">Commentaires</h2>
<?php foreach($comment as $key) : ?>
<p><span class="author"><?= $key['author'] ?></span> <span class="creation">(le <?= $key['created_at'] ?>)</span>
<br>
<?= $key['content'] ?> </p> 
<?php endforeach; ?>

<p><a class="btn btn-primary" href="/?controller=blog&action=comment&id=<?= $article['id'] ?>">Ajouter un commentaire</a></p>


<?php include '../view/partials/_bottom.html.php' ?>
