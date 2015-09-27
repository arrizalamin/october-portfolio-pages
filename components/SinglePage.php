<?php namespace ArrizalAmin\PortfolioPages\Components;

use Cms\Classes\ComponentBase;
use ArrizalAmin\Portfolio\Models\Item;

class SinglePage extends ComponentBase
{
    public $portfolio;

    public function componentDetails()
    {
        return [
            'name'        => 'arrizalamin.portfoliopages::lang.components.single.name',
            'description' => 'arrizalamin.portfoliopages::lang.components.single.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Slug',
                'type' => 'string',
                'default' => '{{ :slug }}',
            ]
        ];
    }

    public function onRun()
    {
        $this->portfolio = Item::where('slug', $this->property('slug'))->first();
    }
}
