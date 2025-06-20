<?php
namespace App\Web;

use Core\App\AppExtend;
use Core\Bootstrap;
use Core\Route\Route;
use Core\App as CoreApp;

class App extends AppExtend
{
    public function init(Bootstrap $bootstrap): void
    {
        // 注册路由应用 - 控制器中的 RouteGroup 需要对应这里注册的名称
        CoreApp::route()->set("web", new Route(""));
    }

    public function register(Bootstrap $bootstrap): void
    {
        // 注册服务
    }

    public function boot(Bootstrap $bootstrap): void
    {
        // 应用启动
    }
}