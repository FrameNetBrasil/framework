<x-fw::layout.index>
    <div class="ui info message m-2">
        <div class="header">
            Error
        </div>
        <p>
            {{$message}}
        </p>
        <x-fw::link-button
            href="{{$goto}}"
            color="negative"
            label="{{$gotoLabel}}"
        >
        </x-fw::flink-button>
    </div>
</x-fw::layout.index>
