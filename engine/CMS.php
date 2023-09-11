<?php

namespace Engine;

class CMS
{

    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }

    public function run()
    {
        $db = $this->di->get('test');

        print_r($db);
    }
}