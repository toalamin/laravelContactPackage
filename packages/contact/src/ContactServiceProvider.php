<?php

namespace Toalamin\Contact;
use Illuminate\Support\ServiceProvider;


Class ContactServiceProvider extends ServiceProvider {


    public function boot(){
           $this->loadRoutesFrom(__DIR__.'/routes/web.php');
           $this->loadViewsFrom(__DIR__.'/views', 'contact');
           $this->loadMigrationsFrom(__DIR__.'/databases/migrations');

    }
    

    public function register(){


    }

}