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

use EasySwoole\Cache\Memcache\MemcacheClient;
use EasySwoole\Pool\ObjectInterface;

/**
 * Memcache Pool Client
 * Class MemcachePoolObject.
 */
class MemcachePoolObject extends MemcacheClient implements ObjectInterface
{
    public function gc()
    {
    }

    public function objectRestore()
    {
    }

    public function beforeUse(): bool
    {
        return true;
    }
}
