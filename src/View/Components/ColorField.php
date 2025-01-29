<?php

namespace FrameNetBrasil\Framework\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ColorField extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public string $label,
        public ?string $value,
        public string $placeholder = ''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::framework.color-field');
    }
}
