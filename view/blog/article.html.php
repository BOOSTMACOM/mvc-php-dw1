<?php include '../view/partials/_top.html.php' ?>
<a class="text-primary goback" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<h1 class="text-center text-secondary"><?= $article['title'] ?></h1>

<div class="imagearticle">
<img src="<?= $article['image'] ?>" alt="image_explication">
<p><?= $article['content'] ?></p>
</div>
<h2 class="comments">Commentaires</h2>
<?php foreach($comment as $key) : ?>
<p><span class="author"><?= $key['author'] ?></span> <span class="creation">(le <?= $key['created_at'] ?>)</span>
<br>
<?= $key['content'] ?> </p> 
<?php endforeach; ?>

<p><a class="btn btn-primary" href="/?controller=blog&action=comment&id=<?= $article['id'] ?>">Ajouter un commentaire</a></p>


<?php include '../view/partials/_bottom.html.php' ?>
