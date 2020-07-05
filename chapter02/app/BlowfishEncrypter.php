<?php

namespace App;

use phpseclib\Crypt\Blowfish;
use Illuminate\Contracts\Encryption\Encrypter as EncrypterContract;

class BlowfishEncrypter implements EncrypterContract
{
    protected $encrypter;

    public function __construct(String $key)
    {
        $this->encrypter = new Blowfish();
        $this->encrypter->setKey($key);
    }

    /**
     * Encrypt the given value.
     *
     * @param  string  $value
     * @param  bool  $serialize
     * @return string
     */
    public function encrypt($value, $serialize = true)
    {
        return $this->encrypter->encrypt($value);
    }

    /**
     * Decrypt the given value.
     *
     * @param  string  $payload
     * @param  bool  $unserialize
     * @return string
     */
    public function decrypt($payload, $unserialize = true)
    {
        return $this->encrypter->decrypt($payload);
    }
}