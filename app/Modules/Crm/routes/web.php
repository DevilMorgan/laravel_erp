<?php
use Illuminate\Support\Facades\Route;

Route::get('crm', 'CrmController@welcome');

Route::group(['middleware' => ['auth:web']], function () {

    Route::group(['prefix' => 'crm/customers'], function () {
        Route::get('/', 'CustomersController@index')->name('crm.customers.index');
        Route::get('/create', 'CustomersController@create')->name('crm.customers.create');
        Route::post('/store', 'CustomersController@store')->name('crm.customers.store');
        Route::get('/{id}/edit', 'CustomersController@edit')->name('crm.customers.edit');
        Route::post('/update', 'CustomersController@update')->name('crm.customers.update');
        Route::get('/{id}/delete', 'CustomersController@delete')->name('crm.customers.delete');
    });
});