<?php

use yii\helpers\Url;

$admin = Url::to(['/admin'], true);
?>
<main role="main" class="container">
    <h1 class="mt-5">yii2-admin-demo</h1>
    <p class="mt-2 lead">Admin area (TBD): <a href="<?= $admin ?>"><?= $admin ?></a></p>
</main>
