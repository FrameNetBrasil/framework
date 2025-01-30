<x-fw::layout.index>
    <div class="ui negative message m-2">
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
        </x-fw::link-button>
    </div>
</x-fw::layout.index>
