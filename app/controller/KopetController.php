<?php
namespace App\Controller;

class KopetController
{
    protected $hello;

    public function __construct($hello)
    {
        $this->hello = $hello;
    }

    public function silit()
    {
        print_r($this->hello);
        echo 'Mantul: ';
    }
}
