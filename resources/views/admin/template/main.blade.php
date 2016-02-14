<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Default') | Panel de administración</title>
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('admin.template.partials.nav')
        <section>
            @yield('content')
        </section>
        
        <script src="{{ asset('plugins/jquery/js/jquery-2.2.0.js')}} "></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}} "></script>
    </body>
</html>
