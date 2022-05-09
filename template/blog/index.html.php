<h1>Tout les articles</h1>

<?php foreach($data as $key) : ?>
  <div>
  <a href="/?controller=blog&action=article&id=<?= $key->getId(); ?>"><?= $key->getTitle(); ?></a>
  </div>
  <?php endforeach; ?>