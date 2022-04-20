<?php include '../view/partials/_top.html.php' ?>


<h1 class="text-center blog-prog">Le blogrammation </h1>
<h2>Tout les articles</h2>
<?php foreach($articles as $article): ?>
<p class="art"><a class="text-primary font-wheight-light" href="/?controller=blog&action=article&id=<?= $article['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
</svg> <?= $article['title'] ?></a></p> 
<?php endforeach; ?>


<a href="/?controller=blog&action=addArticles" class="btn btn-primary">Créer un article</a>


<?php include '../view/partials/_bottom.html.php' ?>
