<?php

/** @var $this \App\Core\View */
$this->title = 'Contact';
/** @var $this \App\Core\View */
/** @var $model \App\Models\ContactForm */

use App\Core\form\TextareaField;

$this->title = 'Contact';
?>

<h1>Contact</h1>
<?php $form = \App\Core\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Send</button>
<?php \App\Core\form\Form::end(); ?>

