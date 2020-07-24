<?php


namespace Library;


use Library\Https\Request;

class Application
{
    private static $_instance = null;

    protected $config;
    protected $request;

    private function __construct($request, $config)
    {
        $this->config = $config;
        $this->request = $request;
    }

    public static function getInstance(Request $request, $config = [])
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Application($request, $config);
        }
        return self::$_instance;
    }

    public function run()
    {

    }
}
