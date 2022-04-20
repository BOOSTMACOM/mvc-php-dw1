<?php include '../view/partials/_top.html.php' ?>
<a class="text-primary" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<h1 class="text-primary">Ajout d'un nouvel article</h1>

<form action="" method="POST">

<label for="title">Quel est le nom de l'article?</label>
<input type="text" name="title">
<br>
<br>
<label for="content">Quel est le contenu de l'article?</label>
<br>
<textarea name="content" cols="30" rows="10"></textarea>
<br>
<br>

<input type="submit" name="submit" value="Envoyer">

</form>
<?php include '../view/partials/_bottom.html.php' ?>