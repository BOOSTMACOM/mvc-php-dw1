<?php include '../view/partials/_top.html.php' ?>


<h1 class="text-center">Blog</h1>
<h2>Tout les articles</h2>
<?php foreach($articles as $article): ?>
<p><a href="/?controller=blog&action=article&id=<?= $article['id'] ?>"><?= $article['title'] ?></a></p> 
<?php endforeach; ?>


<?php include '../view/partials/_bottom.html.php' ?>
