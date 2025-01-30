<?php

namespace FrameNetBrasil\Framework\View\Components\Combobox;

use FrameNetBrasil\Framework\Database\Criteria;
use FrameNetBrasil\Framework\Services\AppService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayerType extends Component
{
    /**
     * Create a new component instance.
     */
    public array $options;
    public function __construct(
        public string $id,
        public string $label,
        public int $value
    )
    {
        $list = Criteria::table("view_layertype as lt")
            ->join("layergroup as lg", "lg.idLayerGroup", "=", "lt.idLayerGroup")
            ->select("lt.idLayerType", "lg.name as layerGroup", "lt.name")
            ->where("lt.idLanguage", AppService::getCurrentIdLanguage())
            ->orderBy("lg.name")
            ->orderBy("lt.name")->all();
        $this->options = [];
        foreach($list as $lt) {
            $this->options[$lt->idLayerType] = [
                'id' => $lt->idLayerType,
                'text' => $lt->layerGroup . '.' . $lt->name,
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('fw::framework.combobox.layer-type');
    }
}
