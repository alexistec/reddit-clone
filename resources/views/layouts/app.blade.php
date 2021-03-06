<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reddit clone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>REDDIT CLONE</h1>
                <small class="pull-right">
                    <a href="{{route('create_post_path')}}">Create post</a>
                </small>
            </div>
        </div>
        <hr>
        @include('layouts._errors')
        @include('layouts._messages')
        @yield('content')
    </div>
</body>
</html>