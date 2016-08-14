<?php

namespace app;


class RandomToken
{

    protected $length;
    protected $bytes;

    /**
     * RandomToken constructor.
     * @param int $length
     */
    public function __construct($length = 16)
    {
        $this->length = $length;
        if (function_exists('random_bytes'))
            $this->bytes = random_bytes($length);
        else
            $this->bytes = openssl_random_pseudo_bytes($length);
    }

    public function rawBytes()
    {
        return $this->bytes;
    }

    public function string()
    {
        return bin2hex($this->rawBytes());
    }
}