<?php

namespace Tests;

use Illuminate\Filesystem\Cache;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
        parent::setUp();
        Cache::flush();
    }

    public function tearDown()
    {
        parent::tearDown();
    }
}
