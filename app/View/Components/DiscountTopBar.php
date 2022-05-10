<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DiscountTopBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pageIcon;
    public $mainPage;
    public $subPage;
    public $buttonLink;
    public $buttonShow;
    public $buttonText;

    public function __construct($pageIcon,$mainPage,$buttonLink,$buttonShow,$subPage,$buttonText)
    {
        $this->pageIcon=$pageIcon;
        $this->mainPage=$mainPage;
        $this->subPage=$subPage;
        $this->buttonText=$buttonText;
        $this->buttonLink=$buttonLink;
        $this->buttonShow=$buttonShow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.discount-top-bar');
    }
}
