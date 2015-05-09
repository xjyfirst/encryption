<?php namespace Tx;

interface FacadeInterface{
    // conf return config like this:
    /*
        return [
            'key' => 'abcdefghijhlmnopqrsduvqxyzaaaaa',
            'cipher' => MCRYPT_RIJNDAEL_128,
        ];
    //*/
    public static function conf();
    public static function __callStatic($name, array $args);
}

