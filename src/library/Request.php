<?php declare(strict_types=1);

class Request
{
    var $f_no;
    var $bank_account;

    public function __construct($f_no, $bank_account)
    {
        $this->f_no = $f_no;
        $this->bank_account = $bank_account;
    }
}
