<?php namespace ArrizalAmin\PortfolioPages;

use System\Classes\PluginBase;

/**
 * PortfolioPages Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['ArrizalAmin.Portfolio'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'arrizalamin.portfoliopages::lang.plugin.name',
            'description' => 'arrizalamin.portfoliopages::lang.plugin.description',
            'author'      => 'ArrizalAmin',
            'icon'        => 'icon-files-o'
        ];
    }

    public function boot()
    {
        \Event::listen('backend.form.extendFields', function($widget) {
            if (! $widget->getController() instanceof \ArrizalAmin\Portfolio\Controllers\Items)
                return;

            $widget->addTabFields([
                'slug' => [
                    'label' => 'Slug',
                    'preset' => 'title',
                    'tab' => 'Pages'
                ],
                'excerpt' => [
                    'label' => 'arrizalamin.portfoliopages::lang.fields.excerpt',
                    'type' => 'richeditor',
                    'size' => 'small',
                    'tab' => 'Pages'
                ]
            ]);
        });
    }

    public function registerComponents()
    {
        return [
            'ArrizalAmin\PortfolioPages\Components\SinglePage' => 'portfolioPage',
            'ArrizalAmin\PortfolioPages\Components\Portfolio' => 'portfolio'
        ];
    }

}
