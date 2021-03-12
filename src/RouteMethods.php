<?php

namespace Larangular\MetableRoutes;

use Illuminate\Support\Facades\Route;
use Larangular\MetableRoutes\Http\Controllers\Gateway;

class RouteMethods {

    public static function routes(): void {
        Route::get('metadata', [
            Gateway::class,
            'index',
        ])
             ->name('metadata.index');

        Route::get('metadata/{metadata}', [
            Gateway::class,
            'show',
        ])
             ->name('metadata.show');

        Route::post('metadata', [
            Gateway::class,
            'store',
        ])
             ->name('metadata.store');
    }

}
