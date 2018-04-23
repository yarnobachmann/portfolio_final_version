<?php

namespace App\widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ProjectWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Project::count();
        $string = 'Projecten';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-archive',
            'title'  => "{$count} Projecten",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower("projecten")]),
            'button' => [
                'text' => __("projecten"),
                'link' => route('voyager.projects.index'),
            ],
            'image' => 'img/widget/projects.jpg',
        ]));
    }
}
