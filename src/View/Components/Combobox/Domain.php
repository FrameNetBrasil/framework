<?php

namespace FrameNetBrasil\Framework\View\Components\Combobox;

use FrameNetBrasil\Framework\Database\Criteria;
use FrameNetBrasil\Framework\Services\AppService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Domain extends Component
{
    public array $options;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public ?string $value = "",
        public ?string $label = '',
        public ?string $placeholder = ''
    )
    {
        $this->options = Criteria::table("view_domain")
            ->select("idDomain","name")
            ->distinct()
            ->where("idLanguage",AppService::getCurrentIdLanguage())
            ->orderBy("name")
            ->keyBy("idDomain")
            ->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::framework.combobox.domain');
    }
}
