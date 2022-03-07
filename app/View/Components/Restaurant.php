<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Restaurant extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $name;
    public $image;
    public $categories;
    public $md;
    public $lg;

    public function __construct($id, $name, $image, $categories, $md = "6", $lg = "4")
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->categories = $categories;
        $this->md = $md;
        $this->lg = $lg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.client.restaurant');
    }
}
