<?php

/*
 * +-------------------------------------
 * | easySwoole framework unit
 * +-------------------------------------
 * | WebSite: https://www.easyswoole.com
 * +-------------------------------------
 * | Welcome Join QQGroup 633921431
 * +-------------------------------------
 */

namespace EasySwoole\Cache\Pools;

use EasySwoole\Pool\ObjectInterface;
use Swoole\Coroutine\Redis;

/**
 * 协程Redis客户端
 * Class RedisPoolObject.
 */
class RedisPoolObject extends Redis implements ObjectInterface
{
    public function gc()
    {
        $this->close();
    }

    public function objectRestore()
    {
    }

    public function beforeUse(): bool
    {
        return true;
    }
}
