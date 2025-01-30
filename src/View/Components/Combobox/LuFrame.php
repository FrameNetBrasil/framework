<?php

namespace FrameNetBrasil\Framework\View\Components\Combobox;

use FrameNetBrasil\Framework\Database\Criteria;
use FrameNetBrasil\Framework\Services\AppService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Repositories\LU;

class LuFrame extends Component
{
    public array $options;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public int     $idFrame,
        public string  $id = '',
        public string  $label = '',
        public ?string $value = null
    )
    {
        //$lus = LU::listForSelectByFrame($this->idFrame)->getResult();
        $idLanguage = AppService::getCurrentIdLanguage();
        $lus = Criteria::byFilter("view_lu", [
            ["idFrame", "=", $idFrame],
            ["idLanguage", "=", $idLanguage],
            ["idLanguageFrame", "=", $idLanguage]
        ])->orderBy("name")->all();
        $this->options = [];
        foreach ($lus as $lu) {
            $this->options[] = [
                'idLU' => $lu->idLU,
                'name' => $lu->name,
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::framework.combobox.lu-frame');
    }
}
