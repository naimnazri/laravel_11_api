<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;

Route::prefix('v1')-> group(function() {

    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);

});

//Route::group(['middleware' => 'auth:sanctum'], function(){
    // Route::get("list/{id?}", [DeviceController::class, 'list']);
    // Route::post("add", [DeviceController::class, 'add']);
    // Route::put("update", [DeviceController::class, 'update']);
    // Route::get("search/{name}", [DeviceController::class, 'search']);
    // Route::delete("delete/{id}", [DeviceController::class, 'delete']);
    // Route::post("save", [DeviceController::class, 'testData']);
    // Route::resource("member", MemberController::class);
//});

//Route::post("login",[UserController::class,'index']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
