<?php


/** @var \Laravel\Lumen\Routing\Router $router  */

use App\Product;

$router->group(['prefix' => 'api/adm', 'middleware' => 'admin' ],function () use ($router){

    $router->group(['prefix' => 'user'], function () use ($router){
        $router->get('','UserController@index');
        $router->get('{id}','UserController@show');
        $router->put('{id}','UserController@update');
        $router->delete('{id}','UserController@destroy');
        $router->get('{id}/address','AddressController@edit');
    });

    $router->group(['prefix' => 'category'],function () use ($router){
        $router->post('','CategoryController@store');
        $router->put('{id}','CategoryController@update');
        $router->delete('{id}','CategoryController@destroy');
    });

    $router->group(['prefix' => 'brand'],function () use ($router){
        $router->post('','BrandController@store');
        $router->put('{id}','BrandController@update');
        $router->delete('{id}','BrandController@destroy');
    });

    $router->group(['prefix' => 'product'],function () use ($router){
        $router->post('','ProductController@store');
        $router->put('{id}','ProductController@update');
        $router->delete('{id}','ProductController@destroy');
    });

    $router->group(['prefix' => 'product-image'],function () use ($router){
        $router->post('','ProductImageController@store');
        $router->put('{id}','ProductImageController@update');
        $router->delete('{id}','ProductImageController@destroy');
    });

    $router->group(['prefix' => 'address'],function () use ($router){
        $router->get('','AddressController@index');
        $router->post('','AddressController@store');
        $router->get('{id}','AddressController@show');
        $router->put('{id}','AddressController@update');
        $router->delete('{id}','AddressController@destroy');
    });

});

$router->group(['prefix' => 'api', 'middleware' => 'auth' ],function () use ($router){

    $router->group(['prefix' => 'user'], function () use ($router){
        $router->get('','UserController@clientIndex');
        $router->put('','UserController@clientUpdate');
    });

    $router->group(['prefix' => 'address'],function () use ($router){
        $router->post('','AddressController@clientStore');
        $router->get('','AddressController@clientEdit');
        $router->put('{id}','AddressController@clientUpdate');
    });

});

$router->group(['prefix' => 'api'],function () use ($router){

    $router->get('store','StoreController@index');

    $router->post('login','AuthController@authentication');

    $router->post('register','AuthController@register');

    $router->group(['prefix' => 'post_office'],function () use ($router){
        $router->post('calculate_price','PostOffices@calculatePrice');
        $router->post('zip_code','PostOffices@zipCode');
    });

    $router->group(['prefix' => 'category'],function () use ($router){
        $router->get('','CategoryController@index');
        $router->get('{id}','CategoryController@show');
        $router->get('{id}/product','ProductController@editCategory');
    });

    $router->group(['prefix' => 'brand'],function () use ($router){
        $router->get('','BrandController@index');
        $router->get('{id}','BrandController@show');
        $router->get('{id}/product','ProductController@editBrand');
    });

    $router->group(['prefix' => 'product'],function () use ($router){
        $router->get('','ProductController@index');
        $router->get('{id}','ProductController@show');
    });

    $router->group(['prefix' => 'product-image'],function () use ($router){
        $router->get('','ProductImageController@index');
        $router->get('{id}','ProductImageController@show');
    });

});

