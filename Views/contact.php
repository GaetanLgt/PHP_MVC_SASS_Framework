<?php

$this->title = 'Contact';

/** @var $model ContactForm */

use App\Core\form\Form;
use App\Core\form\TextareaField;
use App\Models\ContactForm;

$this->title = 'Contact';
?>

<h1>Contact</h1>
<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Send</button>
<?php Form::end(); ?>
