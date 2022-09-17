<?php
/** @var $this View */

use App\Core\form\Form;
use App\Core\View;
use App\Models\User;

$this->title = 'Register';
/** @var $model User */
?>
<h1>Register</h1>
<?php $form = Form::begin('', 'post') ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model , 'firstname') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model , 'lastname') ?>
    </div>
</div>
    <?php echo $form->field($model , 'email') ?>
    <?php echo $form->field($model , 'password')->passwordField() ?>
    <?php echo $form->field($model , 'passwordRepeat')->passwordField() ?>

    <button type="submit" class="btn btn-primary">S'incrire</button>
<?php echo Form::end() ?>
