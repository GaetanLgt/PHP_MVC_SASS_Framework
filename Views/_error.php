<?php
/**
 * @var $exception Exception
 */

$this->title = 'Error '.$exception->getCode();
?>

<h3><?php echo  $exception->getCode() ?> - <?php echo  $exception->getMessage() ; ?></h3>




