<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/zzz_assets/logo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('adminlte.upper-menu')

    @include('adminlte.left-menu')



    <div class="content-wrapper">

        @include('adminlte.content-header')


        <section class="content">
            <div class="container-fluid">

                @hasSection('jumbotron')
                    @yield('jumbotron')
                @endif

                @yield('content-main')

            </div>
        </section>

    </div>

</div>

@include('adminlte.footer')


<aside class="control-sidebar control-sidebar-dark">
    @include('adminlte.right-menu')
</aside>

</div>


<script src="{{ mix('js/app.js') }}" defer></script>

@livewireScripts

</body>
</html>
