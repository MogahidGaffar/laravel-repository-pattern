<?php

namespace app\Repository;
use app\Repository\User\IUserRepository;
use app\Repository\User\ElequentUserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
   
    public function boot()
    {
         $this->app->bind(IUserRepository::class, ElequentUserRepository::class);

    }
}
