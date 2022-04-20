<?php include '../view/partials/_top.html.php'; ?>
<a class="text-primary goback" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<br>
<br>

<h1 class="text-primary">Modification d'un article</h1>
<form action="" method="POST">

<label for="title">Titre de l'article</label>
<input class="text-center" type="text" name="title" size="35" value="<?= $article['title'] ?>">
<br>
<label for="content">Contenu de l'article</label>
<br>
<textarea name="content" size="35" cols="40" rows="25"><?= $article['content'] ?></textarea>
<br>
<br>

<input type="submit" name="submit" value="Envoyer">

</form>
<?php include '../view/partials/_bottom.html.php'; ?>