<html>
    <head>
        <title>inquestPro</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>
        @yield('css')
    </head>
    <body>
    	<div class="container">
        	@yield('content')
        </div>
        @yield('js')
    </body>
</html>