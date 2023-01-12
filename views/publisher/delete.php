<?php
/** @var array $publisher */
?>

<div class="alert alert-danger mt-3" role="alert">
  <h4 class="alert-heading">Видалити категорію "<?= $publisher['name'] ?>"?</h4>
  <hr>
  <p class="mb-0">
    <a href="/publisher/delete/<?= $publisher['id'] ?>/yes" class="btn btn-danger">Видалити</a>
    <a href="javascript:history.back()" class="btn btn-primary">Відмінити</a>
  </p>
</div>