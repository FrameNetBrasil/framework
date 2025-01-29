@if($label != '')
    <label for="{{$id}}">{{$label}}</label>
@endif
<div class="flex flex-wrap">
    @foreach($options as $i => $fe)
        <div class="field">
            <div class="w-16rem ui checkbox {{isset($value[$i]) ? 'checked' : ''}}">
                <input type="checkbox" name="{{$id}}[{{$i}}]"
                       value="{{$fe->idFrameElement}}" {{isset($value[$i]) ? 'checked' : ''}}>
                <label>
                    <x-fw::element.fe name="{{$fe->name}}" idColor="{{$fe->idColor}}"
                                  type="{{$fe->coreType}}"></x-fw::element.fe>
                </label>
            </div>
        </div>
    @endforeach
</div>
<script>
    $(function() {
        $(".ui.checkbox")
            .checkbox()
        ;
    });
</script>
