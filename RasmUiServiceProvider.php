<?php

namespace Onemoreahmad\RasmUi;
    
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RasmUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::anonymousComponentPath(__DIR__.'/components', 'rasm');

        $this->bootTagCompiler();
    }

    public function bootTagCompiler()
    {
  

        $compiler = new RasmTagCompiler(
            app('blade.compiler')->getClassComponentAliases(),
            app('blade.compiler')->getClassComponentNamespaces(),
            app('blade.compiler')
        );
   
        app('blade.compiler')->precompiler(function ($in) use ($compiler) {
            return $compiler->compile($in);
        });
    }

}
