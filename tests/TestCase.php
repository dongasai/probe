<?php

namespace ProbeTests;


use Probe\ProviderFactory;

class TestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \probe\provider\AbstractProvider
     */
    protected $provider;

    public function setUp(): void
    {
        $this->provider = ProviderFactory::create();
    }


}