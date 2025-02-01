<?php

namespace FrameNetBrasil\Framework\View\Components\Combobox;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Repositories\FN4\Concept;

class ConceptFn4 extends Component
{
    /**
     * Create a new component instance.
     */
    public ?string $description = '';
    public function __construct(
        public string $id,
        public string $label,
        public ?int $value = null,
        public string $placeholder = '',
        public string $name = '',
        public ?string $onChange = '',
        public ?string $onSelect = '',
        public ?bool $hasDescription = false,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (($this->value != '') && ($this->value != 0)) {
            $concept = Concept::byId($this->value);
            $this->placeholder = $concept->name;
        } else {
            $this->placeholder = "Search Frame";
        }
        $this->description = $this->hasDescription ? 'description' : '';
        return view('fw::framework.combobox.concept-fn4');
    }
}
