<?php include '../view/partials/_top.html.php' ?>


<div class="gestion-admin">
</div>
<h1 class="text-center blog-prog">Administration</h1>
<h2 id="gestion-articles">Articles</h2>
<a class="text-primary" href="#gestion-commentaires">Tout les commentaires</a>

<table class="table table-dark">
    <thead>
        <th>ID</th>
        <th class="text-center">Titre</th>
        <th class="text-center">Contenu</th>
        <th class="text-center">Date</th>
        <th>Actions</th>
    </thead>
    <?php foreach ($articles as $article) : ?>
        <tbody>
            <td><?= $article['id'] ?></td>
            <td><?= $article['title'] ?></td>
            <td><?= $article['content'] ?></td>
            <td><?= $article['created_at'] ?></td>
            <td>
                <a class="text-warning" href="/?controller=admin&action=update&id=<?= $article['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg></a>
                <a class="text-danger" href="/?controller=admin&action=deleteArticle&id=<?= $article['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a>
            </td>
        </tbody>
    <?php endforeach; ?>
</table>

<h2 id="gestion-commentaires">Commentaires</h2>
<a class="text-primary" href="#gestion-articles">Tout les articles</a>

<table class="table table-dark">
    <thead>
        <th>ID</th>
        <th>Auteur</th>
        <th class="text-center">Contenu</th>
        <th>Date</th>
        <th>Action</th>
    </thead>
    <?php foreach ($comments as $comment) : ?>
        <tbody>
            <td><?= $comment['id'] ?></td>
            <td><?= $comment['author'] ?></td>
            <td class="text-center"><?= $comment['content'] ?></td>
            <td class="text-start"><?= $comment['created_at'] ?></td>
            <td>
                <a class="text-danger" href="/?controller=admin&action=deleteCommentaire&id=<?= $comment['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a>
            </td>
        </tbody>
    <?php endforeach; ?>
</table>

<?php include '../view/partials/_bottom.html.php' ?>