@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0;
    }

    header{
        width: 100%;
    }

    .main-layout {
        display: flex;
        flex-grow: 1;
    }
    main {
            margin-top: 70px;
            margin-left: 270px;
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
        }
</style>
<body>
    <header style="position: fixed; z-index: 1030;">
        @include('partials.nav')
    </header>

    <div class="main-layout">
        <aside style="position: fixed;" class="side_bar">
            @include('partials.sidebar')
        </aside>

        <main>
            <div class="container">
                @yield('main')
            </div>
        </main>
    </div>
</body>