<?php include '../view/partials/_top.html.php' ?>
<h1><?= $article['title'] ?></h1>

<p><a href="/?controller=blog&action=comment&id=<?= $article['id'] ?>">Ajouter un commentaire</a></p>


<?php include '../view/partials/_bottom.html.php' ?>
