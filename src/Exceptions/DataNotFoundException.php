<?php

namespace PHPHive\SimpleUrl\Exceptions;

use Exception;

class DataNotFoundException extends Exception
{
    protected $message = 'Data not found';
}