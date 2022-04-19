<?php include '../view/partials/_top.html.php' ?>


<h1 class="text-center blog-prog">Le blog sur la programmation</h1>
<h2>Tout les articles</h2>
<?php foreach($articles as $article): ?>
<p class="art"><a class="text-info font-wheight-bold" href="/?controller=blog&action=article&id=<?= $article['id'] ?>"><?= $article['title'] ?></a></p> 
<?php endforeach; ?>


<a href="/?controller=blog&action=addArticles" class="btn btn-primary">Créer un article</a>


<?php include '../view/partials/_bottom.html.php' ?>
