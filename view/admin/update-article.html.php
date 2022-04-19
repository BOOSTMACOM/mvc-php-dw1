<?php include '../view/partials/_top.html.php' ?>
<a class="text-info" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<h1 class="text-primary">Modification d'un article</h1>

<form action="" method="POST">

<label for="title">Titre de l'article</label>
<input type="text" name="title" value="<?= $article['title'] ?>">
<br>
<label for="content">Contenu de l'article</label>
<br>
<textarea name="content" cols="30" rows="10"><?= $article['content'] ?></textarea>
<br>
<br>

<input type="submit" name="submit" value="Envoyer">

</form>
<?php include '../view/partials/_bottom.html.php' ?>