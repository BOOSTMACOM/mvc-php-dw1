<?php include '../view/partials/_top.html.php' ?>
<a class="text-primary goback" href="javascript://" onclick="history.back();">Retourner en arrière</a>
<h1 class="text-primary">Ajout d'un commentaire</h1>

<form action="" method="POST">

<label for="author">Quel est votre nom?</label>
<input class="text-center" type="text" size="15" name="author">
<br>
<br>
<label for="content">Quel est votre commentaire?</label>
<br>
<textarea name="content" cols="40" rows="20"></textarea>
<br>
<br>

<label for="anonymous">Anonyme</label>
<input type="radio" name="anonymous">
<br>
<br>

<input type="submit" name="submit" value="Envoyer">

</form>
<?php include '../view/partials/_bottom.html.php' ?>