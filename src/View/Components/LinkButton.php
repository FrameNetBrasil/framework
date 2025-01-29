<?php

namespace FrameNetBrasil\Framework\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public string $id = '',
        public string $icon = '',
        public string $color = '',
        public string $plain = 'true',
        public string $href = '#'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::framework.link-button');
    }
}
