<?php

namespace ProbeTests\A1;

use ProbeTests\TestCase;


/**
 * 系统内核版本
 *
 */
class OsTest extends TestCase
{
    public function testAA()
    {
        $ost = $this->provider->getOsType();
        var_dump($ost);
        self::assertIsString($ost);


        $osr = $this->provider->getOsRelease();
        var_dump($osr);
        self::assertIsString($osr);


        $osk = $this->provider->getOsKernelVersion();
        var_dump($osk);
        self::assertIsString($osk);


    }

}