<?php namespace VnsModules\VideoGadget;

use Illuminate\Support\ServiceProvider;
use VnSource\Traits\ModuleServiceProviderTrait;

class ModuleServiceProvider extends ServiceProvider
{
    use ModuleServiceProviderTrait;

    public $gadget = [
        'videoGadget' => [
            'callback' => 'VnsModules\VideoGadget\Gadget',
            'name' => 'Video Gadget',
            'parameters' => [
                'ids' => [
                    'type' => 'text',
                    'label' => 'Video ids (space with ,)'
                ]
            ]
        ]
    ];

    public function boot()
    {
        $this->initializationModule();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
