<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $value;
    public $placeholder;
    public $type;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = null, $placeholder = null, $id = null, $type = 'text')
    {
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
