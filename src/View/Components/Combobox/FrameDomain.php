<?php

namespace FrameNetBrasil\Framework\View\Components\Combobox;

use FrameNetBrasil\Framework\Database\Criteria;
use App\Repositories\SemanticType;
use FrameNetBrasil\Framework\Services\AppService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrameDomain extends Component
{
    public array $options;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public string $value,
        public string $label = '',
        public string $placeholder = ''
    )
    {
        $domains = Criteria::table("view_semantictype")
            ->where('idLanguage', '=', AppService::getCurrentIdLanguage())
            ->where('entry', 'startswith', 'sty\_fd')
            ->select('idSemanticType', 'name')
            ->orderBy('name')
            ->all();
        $this->options = [];
        foreach ($domains as $domain) {
            $this->options[] = (object)[
                'idSemanticType' => $domain->idSemanticType,
                'name' => $domain->name,
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::framework.combobox.frame-domain');
    }
}
