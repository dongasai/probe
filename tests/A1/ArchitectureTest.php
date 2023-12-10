<?php

namespace ProbeTests\A1;

use ProbeTests\TestCase;


/**
 * 处理器架构
 *
 */
class ArchitectureTest extends TestCase
{
    public function testAA()
    {

        $arch = $this->provider->getArchitecture();
        var_dump($arch);
        self::assertIsString($arch);
    }

}