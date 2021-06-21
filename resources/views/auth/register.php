<?php

use app\core\form\Form;
use app\models\RegisterModel;

$form = Form::begin('/register', 'POST', 'row g-3') ?>

<h1>Crear Cuenta</h1>

<div class="col"><?= $form->field(($model) ?? new RegisterModel, 'Nombre', 'firstName', 'text'); ?></div>
<div class="col-6"><?= $form->field(($model) ?? new RegisterModel, 'Apellido', 'lastName', 'text'); ?></div>
<div class="col-6"><?= $form->field(($model) ?? new RegisterModel, 'Correo electronico', 'email', 'email'); ?></div>
<div class="col-6"><?= $form->field(($model) ?? new RegisterModel, 'Usuario', 'user', 'user'); ?></div>
<div class="col-12"><?= $form->field(($model) ?? new RegisterModel, 'Contraseña', 'password', 'password'); ?></div>
<div class="col-12"><?= $form->field(($model) ?? new RegisterModel, 'Confirmar la contraseña', 'confirmPassword', 'password'); ?></div>
<div class="col-12"><?= $form->check(($model) ?? new RegisterModel, 'Acepto los terminos', 'terms'); ?></div>
<div class="col-12"><?= $form->submit('Enviar'); ?></div>
<?= Form::end(); ?>