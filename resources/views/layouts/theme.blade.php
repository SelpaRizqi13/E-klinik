<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Web-Klinik
    </title>
    @include('includes.style')
</head>

<body>

    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('includes.sidebar')
    <main class="main-content border-radius-lg">
        @include('includes.navbar')
        @yield('content')
    </main>
    @include('includes.script')
    @stack('add-js')
</body>
@stack('jquery')

</html>
