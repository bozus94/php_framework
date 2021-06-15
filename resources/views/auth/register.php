
<?php

use app\core\form\Form;

$form = Form::begin('/register', 'POST', 'row g-3');
echo '<h1>Crear Cuenta</h1>';
$form->field($model, 'Nombre', 'firstName', 'text');
Form::end();

/* <form class="row g-3" method="POST" action="/register">
    <h1>Crear Cuenta</h1>
    <div class="col-md-6">
        <label for="firstName" class="form-label">Nombre</label>
        <input type="text" class="form-control <?= ($model->hasError['firstName']) ? 'is-invalid' : '' ?>" id="firstName" name="firstName" value="<?= ($model->firstName) ?? '' ?>">
        <div class="invalid-feedback">
            <?= $model->getFirstError('firstName')) ?? '' ?>
        </div>
    </div>
     */