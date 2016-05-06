<?php

/*
 * This file is part of the Bouncer package.
 *
 * (c) François Hodierne <francois@hodierne.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bouncer\Profile;

use Bouncer\Bouncer;

class DefaultProfile
{

    public function load(Bouncer $instance)
    {
        self::loadAnalyzers($instance);

        self::initCache($instance);

        self::initResponseCodeSetter($instance);
    }

    public function loadAnalyzers(Bouncer $instance)
    {
        // Load Default analyzers
        \Bouncer\Analyzer\Hostname::load($instance);
    }

    public function initCache(Bouncer $instance)
    {
        // If no cache available, try to set up APC
        $cache = $instance->getCache();
        if (empty($cache)) {
            if (function_exists('apc_fetch')) {
                $cache = new \Bouncer\Cache\Apc();
                $instance->setOptions(array('cache' => $cache));
            } else {
                $instance->error('No cache available. A cache is needed to keep performances acceptable.');
            }
        }
    }

    public function initResponseCodeSetter(Bouncer $instance)
    {
        // If http_response_code not available (PHP 5.3), set a custom response code setter
        if (!function_exists('http_response_code')) {
            $responseCodeSetter = function($code, $message) {
                header("HTTP/1.0 $code $message");
                header("Status: $code $message");
            };

            $instance->setOptions(array('responseCodeSetter' => $responseCodeSetter));
        }
    }
}
