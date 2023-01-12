<?php
/** @var array $model */
/** @var array $errors */
/** @var array $category */
?>

<h2>Редагування категорії</h2>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger text-start" role="alert">
        <ul class="m-0">
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="post" action="" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Назва категорії</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="" aria-describedby="nameHelp"
            value="<?= $model['name'] ?? null ?>">
    </div>
    <div>
        <button class="btn btn-primary">Додати</button>
    </div>
</form>