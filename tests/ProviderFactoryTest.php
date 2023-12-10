<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 * @author dongasai <1514582970@qq.com>
 *
 */

namespace ProbeTests;


use PHPUnit\Framework\TestCase;
use Probe\ProviderFactory;

class ProviderFactoryTest extends TestCase
{
    public function testGetOsType()
    {
        $this->assertEquals('Linux', ProviderFactory::getOsType());
    }

    public function testGetProvider()
    {
        $this->assertInstanceOf('\Probe\Provider\AbstractProvider', ProviderFactory::create());
    }
}
