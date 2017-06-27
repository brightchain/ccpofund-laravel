<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('socials', SocialsController::class);
    $router->resource('inheritance', InheritanceController::class);
    $router->resource('industry', IndustryController::class);
    $router->resource('company', CompanyController::class);
    $router->resource('team', TeamController::class);
    $router->resource('fund', FundController::class);
    $router->resource('invents', InventsController::class);

});
