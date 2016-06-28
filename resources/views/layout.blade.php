<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">
        @yield('content')

        <!-- notification wrap -->
        @if(count($errors))
        <div class="message-wrapper">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        </div>
        @endif
        <!-- notification wrap end -->

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src={{ asset('js/app.js') }}></script>
</body>
</html>
