<?php

namespace TheECGaming\Routing;

use Illuminate\Support\Collection;

class AdminRoutes
{
    private Collection $routes;

    public function __construct()
    {
        $this->routes = collect([
            Route::create('Dashboard', 'admin.dashboard', 'o-home', 'admin.dashboard'),
            Route::create('Portfolio', 'admin.portfolio.index', 'o-archive-box', 'admin.portfolio.*'),
            Route::create('Links', 'admin.links.index', 'o-link', 'admin.links.*'),
            Route::create('Uploads', 'admin.uploads.index', 'o-arrow-up-on-square', 'admin.uploads.*')
        ]);
    }

    public static function routes()
    {
        return (new self)->getRoutes();
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}
