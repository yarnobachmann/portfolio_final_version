<?php

namespace App\widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ImagesWidget extends AbstractWidget
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
        $count = \App\Image::count();
        $string = 'Images';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-polaroid',
            'title'  => "{$count} Foto's",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower("foto's")]),
            'button' => [
                'text' => __("Foto's"),
                'link' => route('voyager.images.index'),
            ],
            'image' => 'img/widget/images.jpg',
        ]));
    }
}
