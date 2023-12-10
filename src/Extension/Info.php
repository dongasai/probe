<?php

namespace Probe\Extension;

class Info
{
    public $name = '';
    public $ReflectionExtension;

    const UNDEFINED = '%UNDEFINED%';

    public function __construct($name)
    {

        $this->name                = $name;
        $this->ReflectionExtension = new \ReflectionExtension($name);
        return $this;
    }


    function REData()
    {

        $re = $this->ReflectionExtension;


        $_data = [];


        $_data['getName'] = $re->getName() ?: self::UNDEFINED;

        $_data['getVersion'] = $re->getVersion() ?: self::UNDEFINED;

        $_data['info'] = $re->info();

        $_data['getClassName'] = PHP_EOL . implode(", ", $re->getClassNames()) ?: self::UNDEFINED;

        $_data['getConstants'] = [];
        foreach ($re->getConstants() as $key => $value) {
            $_data['getConstants'] [$key] = $value;
        }

        $_data['getDependencies'] = $re->getDependencies() ?: self::UNDEFINED;

        $_data['getFunctions'] = PHP_EOL . implode(", ", array_keys($re->getFunctions())) ?: self::UNDEFINED;

        $_data['getINIEntries'] = $re->getINIEntries() ?: self::UNDEFINED;

        $_data['isPersistent'] = $re->isPersistent() ?: self::UNDEFINED;

        $_data['isTemporary'] = $re->isTemporary() ?: self::UNDEFINED;


        return $_data;

    }


    public function getData()
    {
        return $this->REData();
    }

}