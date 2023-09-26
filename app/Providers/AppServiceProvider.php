<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Interfaces\AwsInterface;
use App\Http\Services\AwsService;
use App\Http\Interfaces\UploadInterface;
use App\Http\Services\UploadService;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
	    $this->app->bind(AwsInterface::class, AwsService::class);
        $this->app->bind(UploadInterface::class, UploadService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
    }
}
