<?php

namespace FrameNetBrasil\Framework\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HiddenField extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public string $value
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::components.hidden-field');
    }
}
