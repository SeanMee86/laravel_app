<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Acme</title>
</head>
<body>

    @include('includes.navbar')
    <div class="container">
        @if(Request::is('/'))
        @include('includes.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('includes.messages')
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('includes.sidebar')
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>