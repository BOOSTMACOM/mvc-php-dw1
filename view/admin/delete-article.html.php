<?php include '../view/partials/_top.html.php'; ?>
<a class="text-primary" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<br>
<br>

<h1 class="text-primary">Suppression d'un article</h1>
<p>Êtes-vous sûr de vouloir supprimer l'article  <span class="author"><?= $article['title'] ?></span> créé le <span class="creation"><?= $article['created_at'] ?></span></p>
<h2 class="text-primary">Contenu de l'article</h2>
<p><span class="content"><?= $article['content']; ?></span></p>
<form action="" method="POST">

<input class="btn btn-danger" type="submit" name="submit" value="Supprimer">

</form>
<?php include '../view/partials/_bottom.html.php'; ?>