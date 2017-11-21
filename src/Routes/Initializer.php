<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/16/17
 * Time: 3:22 PM
 */

namespace Src\Routes;

class Initializer
{
    private static $instance = null;
    private $initialized;
    protected $route_map;

    public static function initialize() {
        if (is_null(self::$instance)) {
            self::$instance = new Initializer();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->initialized = false;
        $this->route_map = [
            'MULTISITE_CORE_A'        => \Src\Routes\Api\Core\A::class,
            'MULTISITE_CORE_B'        => \Src\Routes\Api\Core\B::class,
            'MULTISITE_CORE_SHARED'   => \Src\Routes\Api\Core\Shared::class,
            'MULTISITE_VENDOR_A'      => \Src\Routes\Api\Vendor\A::class,
            'MULTISITE_VENDOR_B'      => \Src\Routes\Api\Vendor\B::class,
            'MULTISITE_VENDOR_SHARED' => \Src\Routes\Api\Vendor\Shared::class,
        ];

        $this->init();
    }

    protected function init() {
        if ($this->initialized) {
            return;
        }

        $this->initialized = true;

        foreach ($this->route_map as $site => $class) {
            $this->callRouter($site, $class);
        }
    }

    protected function callRouter(String $site, String $class) {
        if (env($site, false)) {
            $class::router();
        }
    }
}