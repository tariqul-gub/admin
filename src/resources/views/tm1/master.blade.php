<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @foreach (config('admin.css', []) as $css)
        <link rel="stylesheet" href="{{ $css }}">
    @endforeach
    @stack('css')
</head>

<body>
    <section id="admin">
        @include('admin::tm1.inc.sidebar')
        <section id="right">
            <div class="backdrop overlay"></div>
            @include('admin::tm1.inc.topnav')
            <div id="main-content">
                <div class="page-title">
                    <h1 class="title"> @yield('template_title')</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
        </section>
    </section>



    @foreach (config('admin.js', []) as $js)
        <script type="text/javascript" src="{{ $js }}"></script>
    @endforeach
    @stack('js')
</body>

</html>
