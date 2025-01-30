<x-fw::layout.index>
    <div class="ui warning message m-2">
        <div class="header">
            Warning
        </div>
        <p>
            {{$message}}
        </p>
        <x-fw::button
            href="{{$goto}}"
            color="yellow"
            label="{{$gotoLabel}}"
        >
        </x-fw::button>
    </div>
</x-fw::layout.index>
