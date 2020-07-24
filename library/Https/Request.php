<?php


namespace Library\Https;


class Request
{
    const HTTP_REQUEST_METHOD_GET = 'get';

    /**
     * @desc 获取请求方法
     * @return string
     */
    public function getMethod()
    {
        if (isset($_SERVER['REQUEST_METHOD'])) {
            return strtoupper($_SERVER['REQUEST_METHOD']);
        }
        return self::HTTP_REQUEST_METHOD_GET;
    }


    public function getParam()
    {
        
    }
}
