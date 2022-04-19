<?php include '../view/partials/_top.html.php' ?>


<h1 class="text-center blog-prog">Le blog sur la programmation</h1>
<h2>Tout les articles</h2>
<?php foreach($articles as $article): ?>
<p><a class="text-info" href="/?controller=blog&action=article&id=<?= $article['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-code-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6.646 5.646a.5.5 0 1 1 .708.708L5.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 1 1 .708-.708z"/>
</svg><?= $article['title'] ?></a></p> 
<?php endforeach; ?>


<?php include '../view/partials/_bottom.html.php' ?>
