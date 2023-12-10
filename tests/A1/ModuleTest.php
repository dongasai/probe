<?php

namespace ProbeTests\A1;

use Probe\Extension\Info;
use ProbeTests\TestCase;


/**
 * 系统内核版本
 *
 */
class ModuleTest extends TestCase
{
    public function testAA()
    {

        $extensions =get_loaded_extensions();
        $extensions2 =get_loaded_extensions(true);



//        $swoole =
        //        php_logo_guid();
        dump($extensions);
        dump($extensions2);

        $ext28 = (new  Info('mysqli'))->getData();

        dump($ext28);


    }

}