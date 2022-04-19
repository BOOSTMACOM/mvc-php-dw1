<?php include '../view/partials/_top.html.php' ?>


<div class="gestion-admin">
</div>
<h1 class="text-center blog-prog">Administration</h1>
<h2 id="gestion-articles">Articles</h2>
<a class="text-info" href="#gestion-commentaires">Tout les commentaires</a>

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
                <a href="/?controller=admin&action=update&id=<?= $article['id'] ?>">Modifier</a>
                <a href="/?controller=admin&action=deleteArticle&id=<?= $article['id'] ?>">Supprimer</a>
            </td>
        </tbody>
    <?php endforeach; ?>
</table>

<h2 id="gestion-commentaires">Commentaires</h2>
<a class="text-info" href="#gestion-articles">Tout les aticles</a>

<table class="table table-dark">
    <thead>
        <th>ID</th>
        <th class="text-center">Auteur</th>
        <th class="text-center">Contenu</th>
        <th class="text-center">Date</th>
        <th class="text-center">Action</th>
    </thead>
    <?php foreach ($comments as $comment) : ?>
        <tbody>
            <td><?= $comment['id'] ?></td>
            <td><?= $comment['author'] ?></td>
            <td><?= $comment['content'] ?></td>
            <td><?= $comment['created_at'] ?></td>
            <td>
                <a href="/?controller=admin&action=deleteCommentaire&id=<?= $comment['id'] ?>">Supprimer</a>
            </td>
        </tbody>
    <?php endforeach; ?>
</table>

<?php include '../view/partials/_bottom.html.php' ?>