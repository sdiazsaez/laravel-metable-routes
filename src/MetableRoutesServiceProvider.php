<?php

namespace Larangular\MetableRoutes;

use Illuminate\Support\Facades\Route;
use Larangular\Installable\Support\{InstallableServiceProvider as ServiceProvider};
use Larangular\Metadata\Models\Metadata;

class MetableRoutesServiceProvider extends ServiceProvider {

    public function boot(): void {
        Route::model('metadata', Metadata::class);
    }

}
