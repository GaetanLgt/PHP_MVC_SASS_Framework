<?php
/** @var $this \App\Core\View */
$this->title = 'Register';
/** @var $model \App\Models\User */
?>
<h1>Register</h1>
<?php $form = \App\Core\form\Form::begin('', 'post') ?>
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
<?php echo \App\Core\form\Form::end() ?>
<!--<form action="" method="post">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="mb-3">-->
<!--                <label for="firstname" class="form-label">First name</label>-->
<!--                <input type="text" class="form-control --><?php //echo $model->hasError('firstname') ? ' is-invalid' : '' ?><!--" name="firstname" id="firstname" placeholder="Your's firstname here">-->
<!--                <div class="invalid-feedback">-->
<!--                    --><?php //echo $model->getFirstError('firstname') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col">-->
<!--            <div class="mb-3">-->
<!--                <label for="lastname" class="form-label">Last name</label>-->
<!--                <input type="text" class="form-control --><?php //echo $model->hasError('lastname') ? ' is-invalid' : '' ?><!--" name="lastname" id="lastname" placeholder="Your's lastname here">-->
<!--            <div class="invalid-feedback">-->
<!--                --><?php //echo $model->getFirstError('lastname') ?>
<!--            </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="email" class="form-label">Email address</label>-->
<!--        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="password" class="form-label">Password</label>-->
<!--        <input type="password" class="form-control" name="password" id="password" placeholder="Your password here">-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="passwordRepeat" class="form-label">Password Repeat</label>-->
<!--        <input type="password" class="form-control" name="passwordRepeat" id="passwordRepeat" placeholder="please repeat your password here">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->
