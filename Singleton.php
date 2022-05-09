<?php
class Singleton
{
    private static
        $instance = null;

    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}
    public function test()
    {
        var_dump($this);
    }
}

$Object = Singleton::getInstance();
$Object -> test();
Singleton::getInstance() -> test();

#$object2 = new Singleton();
#$Object3 = clone $Object;