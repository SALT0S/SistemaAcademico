<?php

namespace App\Http\Middleware;

use App\Http\Controllers\MenusController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShareSiteData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $siteData = new MenusController();
        $siteData = $siteData->getMenus();
        $siteDataPadres = new MenusController();
        $siteDataPadres = $siteDataPadres->getMenus();
        $siteDataHijos = new MenusController();
        $siteDataHijos = $siteDataHijos->getHijos();
        // Compartir los datos con todas las vistas
        View::share('siteData', $siteData);
        View::share('siteDataHijos', $siteDataHijos);
        View::share('siteDataPadres', $siteDataPadres);

        return $next($request);
    }
}
