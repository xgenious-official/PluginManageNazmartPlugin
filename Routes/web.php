<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ------------------------------------------
     LANDLORD ADMIN ROUTES
-------------------------------------------- */
Route::group(['middleware' => ['auth:admin','adminglobalVariable', 'set_lang'],'prefix' => 'admin-home'],function () {
    Route::get("plugin-manage/all",[\Modules\PluginManage\Http\Controllers\PluginManageController::class,"index"])->name("landlord.plugin.manage.all");
    Route::get("plugin-manage/new",[\Modules\PluginManage\Http\Controllers\PluginManageController::class,"add_new"])->name("landlord.plugin.manage.new");
<<<<<<< HEAD
    Route::post("plugin-manage/new",[\Modules\PluginManage\Http\Controllers\PluginManageController::class,"store_plugin"]);
=======
>>>>>>> c4e560a0aee8ce866e7909a15da5cc7b608c4420
    Route::post("plugin-manage/delete",[\Modules\PluginManage\Http\Controllers\PluginManageController::class,"delete_plugin"])->name("landlord.plugin.manage.delete");
    Route::post("plugin-manage/status",[\Modules\PluginManage\Http\Controllers\PluginManageController::class,"change_status"])->name("landlord.plugin.manage.status.change");
});


//Route::prefix('pluginmanage')->group(function() {
//    Route::get('/', 'PluginManageController@index');
//});
