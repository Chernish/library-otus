<?php

namespace Cheernish\Hw3;

class StringTransformer
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function toLowerCase(): string
    {
        return mb_strtolower($this->string);
    }

    public function toUpperCase(): string
    {
        return mb_strtoupper($this->string);
    }
}