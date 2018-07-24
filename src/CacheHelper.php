<?php
/**
 * Swoft Entity Cache
 *
 * @author   limx <715557344@qq.com>
 * @link     https://github.com/limingxinleo/swoft-aop-cacheable
 */
namespace Swoftx\Aop\Cacheable;

class CacheHelper
{
    public static function parseKey($key, $args = [])
    {
        return preg_replace_callback('/\{(\d)\}/', function ($matches) use ($args) {
            $key = $matches[1];
            return $args[$key] ?? '';
        }, $key);
    }
}