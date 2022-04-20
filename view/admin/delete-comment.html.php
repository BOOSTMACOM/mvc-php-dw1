<?php include '../view/partials/_top.html.php' ?>
<a class="text-primary" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<br>
<br>

<h1 class="text-primary">Suppression d'un commentaire</h1>
<p>Êtes-vous sûr de vouloir supprimer le commentaire de <span class="author"><?= $commentaire['author'] ?></span> qui est "<span class="content"><?= $commentaire['content'] ?></span>" et créé le <span class="creation"><?= $commentaire['created_at'] ?></span></p>
<form action="" method="POST">

<input class="btn btn-danger" type="submit" name="submit" value="Supprimer">

</form>
<?php include '../view/partials/_bottom.html.php' ?>