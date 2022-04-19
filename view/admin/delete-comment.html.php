<?php include '../view/partials/_top.html.php' ?>
<a class="text-info" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<br>
<br>

<h1 class="text-primary">Suppression d'un commentaire</h1>
<p>Êtes-vous sûr de vouloir supprimer le commentaire de <?= $commentaire['author'] ?> qui est "<?= $commentaire['content'] ?>" et créé le <?= $commentaire['created_at'] ?></p>
<form action="" method="POST">

<input class="btn btn-danger" type="submit" name="submit" value="Supprimer">

</form>
<?php include '../view/partials/_bottom.html.php' ?>