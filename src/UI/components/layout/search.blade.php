<form
    id="appSearch"
    action="/app/search"
    method="post"

    {{--    hx-post="/app/search"--}}
    {{--    hx-target="#work"--}}
>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <x-fw::search-field
        id="frame"
        value=""
        placeholder="Search Frame/LU"
        class="w-20rem"
    ></x-fw::search-field>
</form>
