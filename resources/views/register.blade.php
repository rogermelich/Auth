<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">.

    <link href="{{ asset("css/all.css") }}" rel="stylesheet" type="text/css">

    <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container"><div class="jumbotron">REGISTER</div>
    <div class="content">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('register.postRegister') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">User name:</label>
                <input type="text" class="form-control" id="name" name="name"
                       placeholder="El teu nom aquí"
                       value="{{ old('name') }}"
                       required>
            </div>
            <div class="form-group">
                <label for="email">Email adress:</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="example@example.com"
                       value="{{ old('email') }}"
                       required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password confirm:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button id="register" type="submit" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

        Ja tens usuari?
        <a id="register" href="{{ route('auth.login') }}">Loga't</a>
    </div>
</div>
</body>
<script src="{{ asset("/js/all.js") }}"></script>
<script src="{{ asset("/js/main.js") }}"></script>
</html>