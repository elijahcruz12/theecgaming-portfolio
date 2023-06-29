<?php

namespace TheECGaming\Routing;

use Illuminate\Contracts\Support\Arrayable;

class Route implements Arrayable
{
    public string $name;
    public string $route;
    public string $icon;
    public bool $active = false;

    public function __construct(string $name, string $route, string $icon, string $active)
    {
        $this->checkIfRouteExists($route);
        $this->name = $name;
        $this->route = route($route);
        $this->icon = $icon;

        if(request()->routeIs($active)) {
            $this->active = true;
        }

        $this->checkIfIconExists();
    }


    public function toArray() : array
    {
        return [
            'name' => $this->name,
            'route' => $this->route,
            'icon' => $this->icon,
            'active' => $this->active
        ];
    }

    private function checkIfIconExists()
    {
        // We need to see if the icon exists in the public folder.
        // If it doesn't, we'll throw an exception.
        if(!file_exists(public_path('vendor/blade-heroicons/' . $this->icon . '.svg'))) {
            throw new \Exception('The icon ' . $this->icon . ' does not exist in the public folder. Please make sure you have published the assets.');
        }
    }

    public static function create(string $name, string $route, string $icon, string $active)
    {
        return new self($name, $route, $icon, $active);
    }

    private function checkIfRouteExists(string $routeName)
    {
        // If the route doesn't exist, we'll throw an exception.
        try {
            route($routeName);
        }
        catch (\Exception $e) {
            throw new \Exception('The route ' . $routeName . ' does not exist. Please make sure you have created the route.');
        }
    }
}
