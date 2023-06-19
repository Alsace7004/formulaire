<?php


    namespace Alsace7004\Formulaire\Providers;

    use Illuminate\Support\ServiceProvider;

    class FormulaireProvider extends ServiceProvider{

        public function boot(){
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            $this->loadViewsFrom(__DIR__.'/../views','formulaire');
        }
    }
?>