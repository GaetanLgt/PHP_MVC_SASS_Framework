<?php


namespace App\Core\exception;


class NotFoundException extends \Exception
{
    protected $message = 'Page not Found !';
    protected $code = 404;
}
