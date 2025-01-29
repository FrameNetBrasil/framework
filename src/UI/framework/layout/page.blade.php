<x-fw::layout.index>
    @include('fw::framework.layout.head')
    <header id="header">
        <i id="headMenuIcon" class="sidebar icon menuIcon cursor-pointer"></i>
        {{$head}}
    </header>
    <div id="content">
        <div class="contentContainer ui pushable">
            <div class="menuLeft ui left vertical menu sidebar">
                @include("fw::framework.layout.menu")
            </div>
            <div class="pusher closing pusher-full">
                <main role="main" class="main">
                    {{$main}}
                    <wt-go-top id="btnTop" label="Top" offset="64"></wt-go-top>
                </main>
            </div>
        </div>
    </div>
    <footer>
        <div class="flex justify-content-between w-full">
            <div>
                @include("fw::framework.layout.footer")
            </div>
            <div>
                {!! config('webtool.version') !!}
            </div>
        </div>
    </footer>
    <script>
        $(".menuLeft")
            .sidebar({
                context: $(".contentContainer"),
                dimPage: false,
                transition: "overlay",
                mobileTransition: "overlay",
                closable: false,
            })
            .sidebar("attach events", ".menuIcon")
            .sidebar("hide")
        ;
    </script>
</x-fw::layout.index>
