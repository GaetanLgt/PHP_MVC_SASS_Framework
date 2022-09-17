<?php

/** @var $this View */

use App\Core\form\Form;
use App\Core\View;
use App\Models\User;

$this->title = 'Login';
/** @var $model User */
?>
<h1>Login</h1>
<?php $form = Form::begin('', 'post') ?>

<?php echo $form->field($model , 'email') ?>
<?php echo $form->field($model , 'password')->passwordField() ?>

<button type="submit" class="btn btn-primary">Log in</button>
<?php echo Form::end() ?>
