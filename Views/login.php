<?php

/** @var $this \App\Core\View */
$this->title = 'Login';
/** @var $model \App\Models\User */
?>
<h1>Login</h1>
<?php $form = \App\Core\form\Form::begin('', 'post') ?>

<?php echo $form->field($model , 'email') ?>
<?php echo $form->field($model , 'password')->passwordField() ?>

<button type="submit" class="btn btn-primary">Log in</button>
<?php echo \App\Core\form\Form::end() ?>
