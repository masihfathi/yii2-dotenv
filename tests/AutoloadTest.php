<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class AutoloadTest extends TestCase
{
    // test autoload env function
    public function testDefault()
    {
        define('DOTENV_PATH', __DIR__);
        $this->assertEquals('admin', env('YII2_DOTENV_USER'));
    }
}