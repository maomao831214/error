<?php

class Errno
{

    const OK = 0;
    const FAILED = -1;

    public static $errmsg = array(

        self::OK => '成功',
        self::FAILED => '失败',
    );


    public static function getErrResult($errno)
    {
        return array($errno, self::$errmsg[$errno]);
    }

    public static function errReturn($errno)
    {
        return array('errno' => $errno, 'errmsg' => self::$errmsg[$errno]);
    }
}