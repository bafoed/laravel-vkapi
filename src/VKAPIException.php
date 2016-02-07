<?php
/**
 * File: VKAPIException.php
 * Created by bafoed.
 * This file is part of VKTM project.
 * Do not modify if you do not know what to do.
 * 2016.
 */

namespace bafoed\VKAPI;


class VKAPIException extends \Exception {
    /**
     * Error code. If throwed by library, code will be negative, otherwise positive.
     * @var int
     */
    public $code;
    /**
     * Error description.
     * @var string
     */
    public $message;

    public function __construct($code, $message) {
        $this->code = $code;
        $this->message = $message;
    }
}