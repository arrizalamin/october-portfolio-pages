<?php namespace ArrizalAmin\PortfolioPages\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;

class Portfolio extends \ArrizalAmin\Portfolio\Components\Portfolio
{

    public function defineProperties()
    {
        $parentProps = parent::defineProperties();

        return array_merge(
            $parentProps,
            [
                'portfolioPage' => [
                    'title'       => 'arrizalamin.portfoliopages::lang.properties.portfolio.title',
                    'description' => 'arrizalamin.portfoliopages::lang.properties.portfolio.description',
                    'type'        => 'dropdown',
                    'default'     => 'portfolioPage'
                ],
            ]
        );
    }

    public function getPortfolioPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        parent::onRun();
        foreach ($this->portfolio as $portfolio) {
            $params = [
                'slug' => $portfolio->slug
            ];
            $portfolio->page_url = $this->controller->pageUrl($this->property('portfolioPage'), $params);
        }
    }

}
