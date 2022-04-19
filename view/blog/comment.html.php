<?php include '../view/partials/_top.html.php' ?>
<h1>Ajout d'un commentaire</h1>

<form action="" method="POST">

<label for="author">Quel est votre nom?</label>
<input type="text" name="author">
<br>
<br>
<label for="content">Quel est votre commentaire?</label>
<br>
<textarea name="content" cols="30" rows="10"></textarea>
<br>
<br>

<input type="submit" name="submit" value="Envoyer">

</form>
<?php include '../view/partials/_bottom.html.php' ?>